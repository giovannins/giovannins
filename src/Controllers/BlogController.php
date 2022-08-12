<?php

namespace App\Controllers;

use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;
use \App\Models\Blog;

class BlogController
{
    protected $loader;
    protected $twig;
    protected $blogModel;

    public function __construct()
    {
        $this->loader = new FilesystemLoader($GLOBALS['rootdir'] . '/src/views/blog');
        $this->twig = new Environment($this->loader);
        $this->blogModel = new Blog();
    }

    public function index()
    {
        echo $this->twig->render(
            './index.html',
            ['posts' => $this->blogModel->getAll()]
        );
    }

    public function blogPost($id)
    {
        echo $this->twig->render(
            './post.html',
            ['artigo' => $this->blogModel->getId($id)[0]]
        );
    }
}
