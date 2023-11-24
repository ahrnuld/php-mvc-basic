<?php
namespace App\Controllers;

class HomeController
{
    private $articleService;

    function __construct()
    {
        $this->articleService = new \App\Services\ArticleService();
    }

    public function index()
    {
        $model = $this->articleService->getAll();
        require __DIR__ . '/../views/home/index.php';
    }

    public function about()
    {
        require __DIR__ . '/../views/home/about.php';
    }
}