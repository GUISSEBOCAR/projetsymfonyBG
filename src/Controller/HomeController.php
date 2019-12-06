<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {

        $utilisateursRepository =$this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateurs = $utilisateursRepository->findAll();


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            //création de la variable utilisateur qui contient le contenu de $utilisateurs
            'utilisateurs' => $utilisateurs
        ]);
    }
}







       

        