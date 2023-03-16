<?php
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class HomeController
{
    private $twig=null;

    public function __construct()
    {
        $this->twig = new Environment(new FilesystemLoader('views'));
    }
    public function index()
    {
        $articleService = new ArticleService();
        $categoryService = new CategoryService();

        $articles = $articleService->getAllArticles();
        echo $this->twig->render('home/index.html', ["articles" => $articles]);
    }
}