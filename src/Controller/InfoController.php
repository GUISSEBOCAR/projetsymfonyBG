<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController
{
    /**
     * @Route("/info", name="info")
     */
    public function index()
    {

        $utilisateursRepository =$this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateurs = $utilisateursRepository->findAll();

        return $this->render('info/index.html.twig', [
            'controller_name' => 'InfoController',
            'utilisateurs' => $utilisateurs
        ]);
    }
}
