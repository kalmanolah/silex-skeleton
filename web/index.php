<?php
// Define root of the application as a named constant
define('APP_ROOT', __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);

require_once APP_ROOT.'vendor/autoload.php';

$app = new Silex\Application();
$app->register(new DerAlex\Silex\YamlConfigServiceProvider(APP_ROOT.'config/config.yml'));

// Initialize Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'    => APP_ROOT.'views',
    'twig.options' => array(
        'cache'        => APP_ROOT.'cache/twig/',
    ),
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