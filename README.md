Symfony Biga Edition
====================

The Symfony2 Biga distribution contains the basis for any developer to get up
and running as quick as possible.

Features
--------

* Jenkins/Hudson integration - This allows you to just add the project and the
  builds can be on their way. These scripts can be updated via the command line
  so you can always stay up to date.
* Deployment - Biga allows you the ease of deploy and it can be configured any
  way you want and can deploy to any server you want.
* Commands - Symfony commands to allow you to configure the framework.
* Developer Tools - to allow you to setup vhosts and configure other neat
  things

Installation
============

    curl -s https://getcomposer.org/installer | php
    php composer.phar create-project joshuaestes/symfony-biga-framework
    php app/console init:project

