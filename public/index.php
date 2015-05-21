<?php
require '../vendor/autoload.php';

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => '../templates',
));

$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('humantech');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('../logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset'          => 'utf-8',
    'cache'            => realpath('../templates/cache'),
    'auto_reload'      => true,
    'strict_variables' => false,
    'autoescape'       => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Define routes
$app->get('/', function () use ($app) {
    // Render index view
    $app->render('index.html');
});

// Run app
$app->run();
