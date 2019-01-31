<?php
#Yann

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Connexion;
use App\Entity\User;

class AccueilController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $user = new User();//Creation d'un user
        $form = $this->createForm(Connexion::class, $user); //Creation du formulaire de connexion
        $form->handleRequest($request); //On recupere les données du formulaires
        if ($form->isSubmitted()) { //Si qq chose a été donné
            $em = $this->getDoctrine()->getManager(); //On charge doctrine pour des requetes sql
            $connected = $em->getRepository(User::class)->findBy(["mail"=>$user->getMail()]); //On recupere le user par rapport au mail
            if ($passwordEncoder->isPasswordValid($connected[0], $user->getPassword())) { //Si mdp est le bon
            	//Creer session
            	//Appeler function connecte
            	echo "Bravo tu es connecte";
            	return $this->render('accueil/connecte.html.twig');
            }
            echo "<br><br><br><br>";

        }
        return $this->render('accueil/index.html.twig', ['form'=>$form->createView()]);
 	}
}
