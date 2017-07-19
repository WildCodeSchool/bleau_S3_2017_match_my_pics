# MatchMyPics - Symfony 3.2.8

## Application de Geo Caching déstinée aux journées d'intégration de la WCS

L'application permet de participer à un jeu de Geo Caching lors des journées d'intégration des différentes écoles de la WILD CODE SCHOOL

### Qu'est ce que le "Geo Caching" ?

Le geo caching est un jeu d'aventure qui consiste à l'aide d'un GPS ou d'un smartphone à retrouver des objets, batiments ou lieux.

### En quoi consiste l'application MatchMyPics ?

L'application à pour base le jeu d'aventure de Geo Caching, le but du jeu est selectionner des challenges, trouver le lieu, batiment, objet ou autre, le prendre en photo et envoyer sa proposition afin de gagner des points, le jeu permet lors des journées d'intégration de la WCS de casser la glace en faisant participer les nouveaux Wilders en équipe de 3 à 5 joueurs. 

## Install Process

#### Require
1. Composer ==> https://getcomposer.org/

#### Step
1. `git clone project_url`
2. `cd project_directory`
3. `composer install` + configure database et mail (require par fosuser)
4. `php bin/console doctrine:database:create`
5. `php bin/console doctrine:schema:update --force`
6. `mkdir web/image_upload`
7. `chmod -R 777 web/image_upload`
8. `php bin/console assets:install`
9. `php bin/console fixtures:load`
10. Setting up or Fixing File Permissions ==> https://symfony.com/doc/current/setup/file_permissions.html
11. Have fun

Développé par Guillaume HERY, Jérémy LEMARINIER et Charly AUZANET durant la promotion de Février 2017.

Sur une idée original de Lucie COULON