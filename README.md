silex-skeleton
========================

This is a [Silex](http://silex.sensiolabs.org/) skeleton application I'm using as a template for various other projects.

A few of the things it includes:

- A simple, working [controller](web/index.php) / [.htacces](web/.htaccess) combo
- Twig and Doctrine, ready to be used
- Easy configuration through the use of [/config/example.config.yml](config/example.config.yml)
- A HTML5 base Twig template ready to be extended, with blocks you can override
- jQuery, FontAwesome and Twitter Bootstrap
- A [lib/](lib/) folder that has already been added to the autoloader

Documentation
-------------

To set up this application, copy the sample configuration file in  [/config/example.config.yml](config/example.config.yml) to `/config/config.yml`.

The meaning of each configuration variable should be blatantly obvious.

Deploying/setting up
--------------------

You'll need Composer in order to actually get this project to work. Don't forget to edit your configuration file as shown in the section above.

    curl -sS https://getcomposer.org/installer | php
    php composer.phar install

After you've done these things, you can visit `/web` and gaze upon the application.

License
-------

MIT. See [LICENSE](LICENSE).

Credits
-------

A bunch of third party resources were used in the creation of this application. All credit goes to their original creators.
