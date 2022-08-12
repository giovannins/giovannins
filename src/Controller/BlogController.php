<?php

namespace App\Controller;

use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;

class BlogController
{
    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader($GLOBALS['rootdir'] . '/src/views/blog');
        $this->twig = new Environment($this->loader);
    }

    public function index()
    {
        echo $this->twig->render('./index.html');
    }
}
