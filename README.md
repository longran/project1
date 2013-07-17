Tuhn's Symfony Repository
=========================

Please check /src/Tuhn/HelloBundle as a bundle sample

1. Ask Symfony to generate a bundle for you
-------------------------------------------

    $ php app/console generate:bundle --namespace=Tuhn/HelloBundle

2. Create entity files for your bundle
--------------------------------------

    $ php app/console doctrine:generate:entity

3. Create database tables from your created entity files
--------------------------------------------------------

    $ php app/console doctrine:schema:update --force

Enjoy!

[1]:  http://symfony.com/doc/current/book/index.html
[2]:  http://symfony.com/doc/current/cookbook/index.html
[3]:  http://www.symfony2cheatsheet.com/
