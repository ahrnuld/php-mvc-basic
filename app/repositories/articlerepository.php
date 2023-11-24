<?php
namespace App\Repositories;

use PDO;

class ArticleRepository extends Repository {

    function getAll() {
        $stmt = $this->connection->prepare("SELECT * FROM articles");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\\Models\\Article');
        $articles = $stmt->fetchAll();

        return $articles;
    }


    public function insert($article) {
        $stmt = $this->connection->prepare("INSERT INTO articles (title, content, author) 
        VALUES (:title, :content, :author)");
        
        $results = $stmt->execute([':title' => $article->title, 
                                ':content' => $article->content, 
                                ':author' => $article->author]);
        return $results;
    }
}