<?php
#Vianney

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\Inscription;
use App\Entity\User;
use App\Form\Mdp;
use App\Entity\Cle_mail;
 
class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription") 
     */
    public function inscription(Request $request)
    {
        $user = new User();
        $form = $this->createForm(Inscription::class,$user);

        $form->handleRequest($request);//r�cup�ration de donn�e entr�
        
        if($form->isSubmitted() && $form->isValid())//v�rification des valeur entr�
        {
            echo "inscription r�ussi"; 
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();#convertit la requete en sql
            return $this->render('base.html.twig');
        }else
        {
        return $this->render('Inscription.html.twig', array(
            'form' => $form->createView(),
        ));
        }
    }
    
    /**
     * @Route("/inscription/mail", name="mail verif")
     */
    public function mailverif( \Swift_Mailer $mailer, UserPasswordEncoderInterface $passwordEncoder)
    {
    $id = 22;

        $cle = new Cle_mail();//intialise la table cl�_mail
        $cle->setId($id);//ajoute l'id de l'utilisateur
        $cle->setDate();//ajoute  la date � la second pr�s 

        $idhash=$passwordEncoder->encodePassword(new User(),$id);//g�n�re la cl� a partire de l'id
        
        $em=$this->getDoctrine()->getManager();
        
        while($em->getRepository(Cle_mail::class)->findBy(["cle"=>$idhash]))
        {

            $idhash=$passwordEncoder->encodePassword(new User(),$id);//g�n�re la cl� a partire de l'id
            
        }

        $cle->setCle($idhash);//ajoute la cl�

        $old=$em->getRepository(Cle_mail::class)->findBy(["id"=>$id]);

        foreach($old as $oldval)
        {           
            $em->remove($oldval);
        }

        $em->flush();
        $em->persist($cle);
        $em->flush();#convertit la requete en sql

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id); //select toute les donn� de la table user o� l'id = $id
        
        if(!$user)//si l'utilisateur n'existe pas
        {
            echo "pas d'user";
        }

        $message = (new \Swift_Message('Hello Email'))//indiquer le sujet du mail
            ->setFrom('eureka@alwaysdata.net')//set l'expediteur
            ->setTo($user->getMail())//set le destinataire 
            ->setBody(
                $this->renderView('base.html.twig'),
                'text/html'
            );//set le contenu

        $mailer->send($message);
        return $this->render('base.html.twig');
    }
    
    /**
     * @Route("/inscription/modifier_mdp/{cle}", name="modifier mot de passe ")
     */
    //cl� = cl� pour retrouver l'utilisateur (mise dans l'ip) 
    public function setmdp(Request $request,UserPasswordEncoderInterface $passwordEncoder, $cle)
    {   
       echo $cle; 
        $em=$this->getDoctrine()->getManager();
/*
        $link=$em->getRepository(Cle_mail::class)->findBy(["cle"=>$cle]);
        var_dump($link);
echo $link[0];
            $user=$em->getRepository(User::class)->findBy(["id"=>$link[1]->getId()]);
            $em->remove($link[1]);
 */

        $user = new User();
        $form = $this->createForm(Mdp::class,$user);//cr�ation du formulaire

        $form->handleRequest($request);//r�cup�ration des valeur entr�
        
        if($form->isSubmitted() && $form->isValid())//v�rification des valeur entr�
        {
            $hashpassword=$passwordEncoder->encodePassword($user,$user->getPassword());//hash le mot de passe
            $user->setHashPassword($hashpassword);

            $em->persist($user);
            $em->flush();#convertie la requete en sql
        }

        return $this->render('setmdp.html.twig', array(
            'form' => $form->createView(),
        ));

    }

}
