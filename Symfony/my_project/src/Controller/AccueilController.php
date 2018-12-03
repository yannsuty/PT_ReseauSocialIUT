<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\accueil\index;
use App\Entity\User;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $form = $this->createFormBuilder(null)->getForm();
        $form->handleRequest($request);  
        return $this->render('accueil/index.html.twig', [
            'form' => $form->createView()
        ]);
 	}
    public function connexion(Request $request) {
        if($form->isSubmitted()&&$form->isValid()) {
            echo "connecte";
        }
        return $this->render('accueil/index.html.twig');
    }
}

#watch?v=ul7DMDPpiOQ
