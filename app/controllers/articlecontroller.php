<?php
namespace App\Controllers;

class ArticleController
{
    private $articleService;

    function __construct()
    {
        $this->articleService = new \App\Services\ArticleService();
    }

    public function index()
    {
        $model = $this->articleService->getAll();
        require __DIR__ . '/../views/article/index.php';
    }

    public function create() {        
        if($_SERVER['REQUEST_METHOD'] == "GET") {
            require '../views/article/create.php';
        }

        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $title = htmlspecialchars($_POST['title']);
            $author = htmlspecialchars($_POST['author']);        
            $content = $_POST['content'];      
            
            $article = new \App\Models\Article();
            $article->title = $title;
            $article->author = $author;
            $article->content = $content;

            $this->articleService->insert($article);

            $this->index();
        }
    }
}