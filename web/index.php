<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new DerAlex\Silex\YamlConfigServiceProvider(__DIR__.'/../config/config.yml'));

// Initialize Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// Initialize Doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => $app['config']['database']
));

// Set debug to true if viewing locally
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1'))) {
	$app['debug'] = true;
}

/**
 * Route: / => Front page
 */
$app->get('/', function () use ($app) {
	return $app['twig']->render('index.html.twig');
});

$app->run();