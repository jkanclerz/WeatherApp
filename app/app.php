<?php


include_once(__DIR__.'/../vendor/autoload.php');

define('SRC', dirname(__DIR__).'/src');

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Jkanclerz\Application\Controller\OverviewController;

$app = new Application();

$app['debug'] = true;

$app->register(
	new TwigServiceProvider(),
	array(
		'twig.path' => SRC.'/Jkanclerz/Application/Resources/views'
	)
);

$app->register(
	new ServiceControllerServiceProvider()
);

$app['jkan.controller.overview'] = $app->share(
	function() use ($app) {
		return new OverviewController(
			$app['twig']
		);
	}
);

$app->get('/', 'jkan.controller.overview:indexAction');

$app->run();