Installation
==========

slides https://slides.com/gotorahoutan/epsi-symfony

A. Phpstorm - IDE

Installer [PhpStorm](https://www.jetbrains.com/phpstorm/download/)  

Aller dans `Settings` > `plugins` > `Browse Repository` > installer le `Symfony Plugin`

Pensez à l'activer pour le projet  `Settings` > `Languages and frammwork` > `PHP` > `Symfony` 
  - Cochez la case enable
  - remplacez les chemins commenceant par `app/` par `var/`
  - `web` devient `public`

B. Lancer la vm

On installe le projet via composer

    php bin/console server:start
    
    
Installer [vagrant](https://www.vagrantup.com/docs/installation/).  *
Puis, en ligne de commande dans le dossier du projet faire
    vagrant plugin update
`vagrant box add debian/stretch64`

Puis faire un vagrant up.
Le projet est accessible  au http://127.0.0.1:8000
