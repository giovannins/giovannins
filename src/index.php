<?php

require_once '../vendor/autoload.php';

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use \Bramus\Router\Router;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio and personal home page/blog.">
    <meta name="keywords" content="Giovanni Neves Sadauscas">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>GNS</title>
</head>

<body class="bg-zinc-800 text-white font-sans antialiased">
    <header>
        <nav class="flex flex-row p-3 bg-sky-500/50 items-center">
            <h1 class="text-xl ">
                <a href="/">
                    GNS
                </a>
            </h1>
            <div class="ml-auto list-none text-center flex flex-row">
                <div class="p-1 mx-1 hover:bg-sky-500/75 rounded">
                    <a href="/">
                        Home
                    </a>
                </div>
                <div class="p-1 mx-1 hover:bg-sky-500/75 rounded">
                    <a href="/about">
                        About
                    </a>
                </div>
                <div class="p-1 mx-1 hover:bg-sky-500/75 rounded">
                    <a href="/blog">
                        Blog
                    </a>
                </div>
                <div class="p-1 mx-1 hover:bg-sky-500/75 rounded">
                    <a href="/minecraft">
                        SMP
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <?php
    $router = new Router();
    $router->get('/', function () {
        $loader = new FilesystemLoader('views');
        $twig = new Environment($loader);
        $twig->render('home/index.html', ['name' => 'giovanni']);
    });
    $router->get('/about', function () {
        require 'views/about/index.php';
    });
    $router->get('/blog', function () {
      echo 'a';
    });
    $router->get('/minecraft', function () {
        require 'views/minecraft/index.php';
    });
    $router->set404(function () {
        require 'views/404.view.php';
    });
    $router->run();
    ?>
</body>

</html>