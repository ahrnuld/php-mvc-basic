<?php
namespace App\Services;

class ArticleService {
    public function getAll() {
        $repository = new \App\Repositories\ArticleRepository();
        return $repository->getAll();
    }

    public function insert($article) {
        $repository = new \App\Repositories\ArticleRepository();
        return $repository->insert($article);
    }
}