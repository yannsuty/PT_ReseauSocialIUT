<?php
#Vianney

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Inscription;
use App\Entity\User;
 
class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription") 
     */
    public function inscription(Request $request)
    {
        $user = new User();
        $form = $this->createForm(Inscription::class,$user);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            echo "inscription réussi"; 
            echo $user->getStatut();
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();#convertie la requete en sql
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
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('eureka@alwaysdata.net')
            ->setTo('ol3jg@vmani.com')
            ->setBody(
                $this->renderView('base.html.twig'),
                'text/html'
            );

        $mailer->send($message);
        return $this->render('base.html.twig');
    }

}
