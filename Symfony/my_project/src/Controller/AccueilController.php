<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Connexion;
use App\Entity\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request, AuthenticationUtils $authenticationUtils) {
        $lastMail = $authenticationUtils->getLastUsername();
        return $this->render('accueil/index.html.twig', ['last_mail' => $lastMail]);
 	}

    public function connexion(Request $request, AuthenticationUtils $authenticationUtils) {
        $lastMail = $authenticationUtils->getLastUsername();
        
        return $this->render('accueil/index.html.twig', ['last_mail' => $lastMail]);
    }
}
