[[Symfony]] Biga Edition
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
  things.
* Yui Compressor - Comes with yui already bundled in so you don't have to
  set it up and configure it.
* Optimized - Biga comes already optimized to use symfony's extra functionality
  such as ESI.
* Error Pages - Already moved for you to manage and edit.

Optional Tools
--------------

To take advantage of all the features biga has to offer, you will need to make
sure you have all of these installed on your machine and setup properly.

* phing (http://phing.info)
* phpunit (http://phpunit.de)
* phpmd (http://phpmd.org)
* phploc (https://github.com/sebastianbergmann/phploc)
* pdepend (http://pdepend.org)
* phpdcd (https://github.com/sebastianbergmann/phpdcd)
* phpcs (http://pear.php.net/package/PHP_CodeSniffer)
* phpcpd (https://github.com/sebastianbergmann/phpcpd)
* phpdcd (https://github.com/sebastianbergmann/phpdcd)

Installation
============

    curl -s https://getcomposer.org/installer | php
    php composer.phar create-project joshuaestes/symfony-biga-edition /path/to/installation
    cd /path/to/installation
    php app/console init:project

Updating
========

    composer.phar update joshuaestes/biga-framework-bundle

Build
=====

Running a build will test your code and give you statistics on it. Phing is
required and you can always update the build scripts be running the "update"
task. Example:

    phing update

To test your code and to get statistics on it, just run phing.

Commands
========

Biga comes with a few commands that are used to help get you up and running as
fast as possible so you can get to programming.

* init:project - Takes care of the boring stuff such as setting up your
  parameters.yml file.
* apache:vhost:create - Creates an apache vhost file for you.
* apache:restart - Restart apache
* hosts:create - Add an entry into your hosts file
* configure:database - Allows you to update your database settings in the
  parameters.yml file.
* configure:mailer - Configure the mailer section in your parameters.yml
  file.
* generate:controller - Generate a controller skeleton
* generate:command - Generate a command skeleton
* varnish:purge - Purge your varnish cache

Bundles
=======

Biga comes with a few extra bundles already installed.

* BigaFrameworkBundle (https://github.com/JoshuaEstes/biga-framework-bundle)
* DoctrineMigrationsBundle (https://github.com/doctrine/DoctrineMigrationsBundle)
* DoctrineFixturesBundle (https://github.com/doctrine/DoctrineFixturesBundle)

