<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\BlogController;
use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;
use \Bramus\Router\Router;
use \Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

global $loader, $twig, $rootdir;

$rootdir = __DIR__;
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Giovanni's portfolio, blog and personal website.">
    <meta name="keywords" content="Giovanni Neves Sadauscas, Giovanni, Neves, Sadauscas, PHP Developer, Developer, PHP, GNS, Blog, Personal Site,">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>GNS</title>
</head>

<body class="bg-zinc-800 text-white font-serif antialiased">
    <?php
    require_once __DIR__ . '/src/components/navbar.html';
    $router = new Router();
    $router->get('/', function () {
        echo $GLOBALS['twig']->render('home/index.html');
    });
    $router->get('/about', function () {
        echo $GLOBALS['twig']->render('about/index.html', ['age' => calcAge()]);
    });
    $router->get('/blog', function () {
        $blog = new BlogController();
        $blog->index();
    });
    $router->get('/minecraft', function () {
        echo $GLOBALS['twig']->render('minecraft/index.html');
    });
    $router->set404(function () {
        echo $GLOBALS['twig']->render('404.html');
    });
    $router->run();
    ?>
</body>

</html>