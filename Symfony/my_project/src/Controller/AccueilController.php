<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Connexion;
use App\Entity\User;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request)
    {
        $user = new User();
        #$user->setEmail('exemple@mail.com');
        
        $form = $this->createForm(Connexion::class,$user);

        if($form->isSubmitted() && $form->isValid()) {
            echo "connexion reussi";
        }

        return $this->render('accueil/index.html.twig', ['form' => $form->createView()
        ]);
 	}

}
