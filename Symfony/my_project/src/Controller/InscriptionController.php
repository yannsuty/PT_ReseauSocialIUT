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
}
