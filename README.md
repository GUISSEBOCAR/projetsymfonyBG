# projetsymfonyBG
ce code est un projet de création de blog réalisée avec symfony 4.
nous avons utilisé une base de données Mysql pour stocker nos données et des fixtures pour peupler la BDD 

## Pré-requis

* avoir composer installé (gestionnaire de package php)
* avoir npm installé (gestionnaire de packages, surcharge npm)

## Installation

Une fois cloné en local, se déplacer dans la racine du projet puis :
 
* `composer install`, installe les packages php décrits dans composer.json
* `npm install`, installe les packages js décrits dans package.json

Et ensuite pour travailler : 

* `./bin/console s:r` ou `./bin/console server:run`, démarre un serveur web local de développement 
* `./node_modules/.bin/encore dev --watch, exécute en continu 'encore' qui agrège les js et styles
