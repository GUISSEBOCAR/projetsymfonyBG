<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use\App\Entity\Article;
class UtilisateurFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setNom("Guisse")
        ->setPrenom("Bocar")
        ->setAge(30)
        ->setAdresse("3 Rue Charles Borromée 34080 Montpellier")
        ->setPresentation("Pas besoin de revenir sur mon etat civil car vous avez toutes les info
            me concernant en début de la page.
            je suis en france depuis presque 5ans pour suivre mes études
            supérieures.
            je suis diplomé d'un master en sociologie observation et analyse sociologigue du changement social et des action
            collective. vu que c'est un domaine qui recrute peu de nos jours,
            j'ai donc décidé de faire une reconversion. c'est en ce sens que je me suis inscrit au master IPS.
            avec ce master. à l'heure ou vous lisez mon blog sachez que je suis à la recherche d'un stage de fin d'étude a fin de 
            d'intégrer le marché de l'emploi et apporté ma pierre à l'édiffice dans ce domaine.
            je vais donc vous presenter mon site internet qui est réalisé avec le langage symfony")
            ->setHobbie("Football")
            ->setContact("carbomamene@hotmail.fr");
            $manager->persist($utilisateur);



        
            $article = new Article();
            $article->setTitre("Projet JEE ")
                    ->setDescription("Ceci est un projet développé dont l'objectif est de mettre une application de gestion de projet. la téchnologie utilisée etant JEE ")
                    ->setAnnee(new \DateTime())
                    ->setUtilisateur($utilisateur)
                    ->setLien("https://github.com/GUISSEBOCAR/JEEProjetMonument");

                    $manager->persist($article);

            $article1 = new Article();
            $article1->setTitre("Projet Angular")
                     ->setDescription("Ce projet réalisé avec le framwork angular avait pour Objectif de developper une application de vente en ligne")
                     ->setAnnee(new \DateTime())
                     ->setUtilisateur($utilisateur)
                     ->setLien("https://github.com/GUISSEBOCAR/JEEProjetMonument");


                     $manager->persist($article1);


        $manager->flush();
    }
}
