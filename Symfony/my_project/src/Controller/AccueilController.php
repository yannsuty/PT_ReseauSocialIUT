<?php
#Yann

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Connexion;
use App\Entity\User;

class AccueilController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        //Creation d'un user
        $user = new User();
        //Creation du formulaire de connexion
        $form = $this->createForm(Connexion::class, $user);
        //On recupere les données du formulaires
        $form->handleRequest($request);
        //Si qq chose a été donné
        if ($form->isSubmitted()) { 
            $em = $this->getDoctrine()->getManager(); //On charge doctrine pour des requetes sql
            $connected = $em->getRepository(User::class)->findBy(["mail"=>$user->getMail()])[0]; //On recupere le user par rapport au mail
            if ($passwordEncoder->isPasswordValid($connected, $user->getPassword())) { //Si mdp est le bon
                //Creer session
                $session = new Session();
                $session->set('user', $connected);
                $nom = $connected->getPrenom()." ".$connected->getNom();
            	return $this->render('accueil/connecte.html.twig',['connecte'=>true,"nom"=>$nom]);
            }
            echo "<br><br><br><br>";

        }
        return $this->render('accueil/index.html.twig', ['form'=>$form->createView(),'connecte'=>false]);
 	}
}
