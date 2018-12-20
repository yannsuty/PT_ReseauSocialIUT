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
        }

        return $this->render('Inscription.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/inscription/mail", name="mail verif")
     */
    public function mailverif( \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))//indiquer le sujet du mail
            ->setFrom('eureka@alwaysdata.net')//set l'expediteur
            ->setTo('vianney.demarquet@etu.u-pec.fr')//set le destinataire 
            ->setBody(
                $this->renderView('base.html.twig'),
                'text/html'
            );//set le contenu

        $mailer->send($message);
        return $this->render('base.html.twig');
    }
    
    /**
     * @Route("/inscription/modifier_mdp", name="modifier mot de passe ")
     */
    public function setmdp(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(Mdp::class,$user);//cr�ation du formulaire

        $form->handleRequest($request);//r�cup�ration des valeur entr�
        
        if($form->isSubmitted() && $form->isValid())//v�rification des valeur entr�
        {
            $hashpassword=$passwordEncoder->encodePassword($user,$user->getPassword());//hash le mot de passe
            $user->setHashPassword($hashpassword);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();#convertie la requete en sql
        }

        return $this->render('setmdp.html.twig', array(
            'form' => $form->createView(),
        ));

    }

}
