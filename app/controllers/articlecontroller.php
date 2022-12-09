<?php
require __DIR__ . '/../services/articleservice.php';

class ArticleController
{
    private $articleService;

    function __construct()
    {
        $this->articleService = new ArticleService();
    }

    public function index()
    {
        $model = $this->articleService->getAll();

        require __DIR__ . '/../views/article/index.php';
    }
}