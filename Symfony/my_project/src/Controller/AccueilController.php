<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\Connexion;
use App\Entity\User;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(Connexion::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()) {
            echo "connecte";
        }

        return $this->render('accueil/index.html.twig', [
            'form' => $form->createView()
        ]);
 	}
}

#watch?v=ul7DMDPpiOQ
