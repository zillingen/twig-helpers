<?php

require_once __DIR__.'/../vendor/autoload.php';

// Load Twig
$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
$twig = new Twig_Environment($loader, array(
    'debug' => true,
    'auto_reload' => true,
    // 'cache' => false, // Disable Twig caching
    'cache' => __DIR__.'/../cache/twig', 
));
$twig->addExtension(new SeoTwigExtension());

print $twig->render('index.twig', ['message' => 'Hello Twig!']);
