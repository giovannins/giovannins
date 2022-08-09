<?php

require __DIR__ . '/vendor/autoload.php';

use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;
use \Bramus\Router\Router;

global $loader, $twig;
$loader = new FilesystemLoader(__DIR__ . '/src/views/');
$twig = new Environment($loader);

function calcAge()
{
    $todayYear = date('Y');
    $birthYear = 2000;
    return $todayYear - $birthYear;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio and personal home page/blog.">
    <meta name="keywords" content="Giovanni Neves Sadauscas">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>GNS</title>
</head>

<body class="bg-zinc-800 text-white font-serif antialiased">
    <header>
        <nav class="flex flex-row p-3 bg-green-700/50 items-center">
            <h1 class="text-xl">
                <a href="/">
                    GNS
                </a>
            </h1>
            <div class="ml-auto list-none text-center flex flex-row">
                <div >
                    <a class="p-2 mx-1 hover:bg-green-700/75 rounded" href="/">
                        Home
                    </a>
                </div>
                <div >
                    <a class="p-2 mx-1 hover:bg-green-700/75 rounded" href="/about">
                        About
                    </a>
                </div>
                <div >
                    <a class="p-2 mx-1 hover:bg-green-700/75 rounded" href="/blog">
                        Blog
                    </a>
                </div>
                <div >
                    <a class="p-2 mx-1 hover:bg-green-700/75 rounded" href="/minecraft">
                        SMP
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <?php
    $router = new Router();
    $router->get('/', function () {
        echo $GLOBALS['twig']->render('home/index.html');
    });
    $router->get('/about', function () {
        echo $GLOBALS['twig']->render('about/index.html', ['age' => calcAge()]);
    });
    $router->get('/blog', function () {
        echo 'a';
    });
    $router->get('/minecraft', function () {
        require 'views/minecraft/index.php';
    });
    $router->set404(function () {
        echo $GLOBALS['twig']->render('404.html');
    });
    $router->run();
    ?>
</body>

</html>