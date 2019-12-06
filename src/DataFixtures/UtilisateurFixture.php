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
        // création d'un utilisateur
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
            ->setHobbie("Lecture, Sport")
            ->setContact("carbomamene@hotmail.fr");
            $manager->persist($utilisateur);



            // creation de articel 1
            $article = new Article();
            $article->setTitre("Projet JEE ")
                    ->setDescription("Ceci est un projet développé en java dont l'objectif est de mettre une 
                                        application de gestion des monuments; la téchnologie utilisée est java JEE.
                                        avec ce projet nous avons dévellopé une application qui permet de gerer de monuments situés en france 
                                        par département. En cliquant ce lien ci dessous, vous aurez accés au code source situé sur
                                        github ")
                    ->setAnnee(new \DateTime())
                    ->setUtilisateur($utilisateur)
                    ->setLien("https://github.com/GUISSEBOCAR/JEEProjetMonument");

                    $manager->persist($article);

            // creation de articel 2
            $article1 = new Article();
            $article1->setTitre("Projet Angular")
                     ->setDescription("Dans le cadre de notre cours Téchno Avancé nous avons réalisé avec le framwork angular  un projet dont l'bjectif est
                                       de developper une application de vente en ligne" )
                     
                     ->setAnnee(new \DateTime())
                     ->setUtilisateur($utilisateur)
                     ->setLien("https://github.com/GUISSEBOCAR/prjetAngular");
                     $manager->persist($article1);

            /// creation de articel 3
            $article2 = new Article();
            $article2->setTitre("Projet Symfony")
                     ->setDescription("Dans le cadre de notre cours Programmation avancé nous avons eu à dévelloper un petit blog
                                        en utilisant le framwork symfony. pour se faire nous avons creait deux pages; une etant la page 
                                        d'accueil et l'autre la page ou se trouve nos articles.
                                        dans ce blog les données sont stockées dans uns base de donnée et on est passé par les fixtures de symfony pour persister nos données dans la base.
                                        pour visuliser le code source, merci de cliquer le lien ci déssous ")
                     ->setAnnee(new \DateTime())
                     ->setUtilisateur($utilisateur)
                     ->setLien("https://github.com/GUISSEBOCAR/projetsymfonyBG");


                     $manager->persist($article2);


        $manager->flush();
    }
}
