<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
#use Symfony\Component\HttpFoundation\Request;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {  
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
 	}
<<<<<<< HEAD
    public function connexion() {
        echo "connecte";
=======

    public function connexion(Request $request) {
        echo "hello";
>>>>>>> suty
        return $this->render('accueil/index.html.twig');
    }
}
