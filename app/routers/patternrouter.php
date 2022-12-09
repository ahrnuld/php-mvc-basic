<?php

class PatternRouter
{
    private function stripParameters($uri)
    {
        if (str_contains($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        return $uri;
    }

    public function route($uri)
    {

        $uri = $this->stripParameters($uri);

        $explodedUri = explode('/', $uri);

        if (!isset($explodedUri[0]) || empty($explodedUri[0])) {
            $explodedUri[0] = 'home';
        }
        $controllerName = $explodedUri[0] . "controller";

        if (!isset($explodedUri[1]) || empty($explodedUri[1])) {
            $explodedUri[1] = 'index';
        }
        $methodName = $explodedUri[1];

        $filename = __DIR__ . '/../controllers/' . $controllerName . '.php';

        if (file_exists($filename)) {
            require($filename);
            try {
                $controllerObj = new $controllerName();
                $controllerObj->$methodName();
            } catch(Error $e) {
                // For some reason the class/method doesn't load
                http_response_code(500);
            }
        } else {
            // Controller/method matching the URL not found
            http_response_code(404);
        }
    }
}