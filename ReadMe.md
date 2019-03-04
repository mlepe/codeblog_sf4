Installation
==========


A. Phpstorm - IDE

Installer [PhpStorm](https://www.jetbrains.com/phpstorm/download/)  

Aller dans `Settings` > `plugins` > `Browse Repository` > installer le `Symfony Plugin`

Pensez à l'activer pour le projet  `Settings` > `Languages and frammwork` > `PHP` > `Symfony` 
  - Cochez la case enable
  - remplacez les chemins commenceant par `app/` par `var/`
  - `web` devient `public`

A. Vagrant & Homestead - Surcouche de Machine virtuelle 

Installer [vagrant](https://www.vagrantup.com/docs/installation/).  *
Puis, en ligne de commande dans le dossier du projet faire
    vagrant plugin update
`vagrant box add ubuntu/trusty64`s

Puis installer [Homestead](https://laravel.com/docs/5.7/homestead#first-steps) (c'est mieux avec la fibre)  

    vagrant box add laravel/homestead https://vagrantcloud.com/laravel/homestead
    git clone https://github.com/laravel/homestead.git ~/Homestead
    cd ~/Homestead
    bash init.sh

Dans le fichier homestead.yml généré:



Puis suivre la page de [documentation ici](https://symfony.com/doc/current/setup/homestead.html)

TODO
On installe le projet via composer

    composer create-project symfony/website-skeleton codeblog
