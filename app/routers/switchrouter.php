<?php
class SwitchRouter {
    public function route($uri) {

        $uri = $this->stripParameters($uri);

        switch($uri) {
            case '': 
            case 'home': 
            case 'home/index': 
                require __DIR__ . '/controllers/homecontroller.php';
                $controller = new HomeController();
                $controller->index();
                break;
               
            case 'home/about': 
                    require __DIR__ . '/controllers/homecontroller.php';
                    $controller = new HomeController();
                    $controller->about();
                    break;

            default: 
            http_response_code(404);
            break;
        }

    }

    private function stripParameters($uri) {
        if(str_contains($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        return $uri;
    }
}