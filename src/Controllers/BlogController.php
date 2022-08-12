<?php

namespace App\Controllers;

use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;
use \App\Models\Blog;

class BlogController
{
    private $loader;
    private $twig;
    private $blogModel;

    public function __construct()
    {
        $this->loader = new FilesystemLoader($GLOBALS['rootdir'] . '/src/views/blog');
        $this->twig = new Environment($this->loader);
        $this->blogModel = new Blog();
    }

    public function index()
    {
        echo $this->twig->render('./index.html');
    }
}
