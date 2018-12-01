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
       
        $form = $this->createForm(Inscription::class);

        return $this->render('Inscription.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
