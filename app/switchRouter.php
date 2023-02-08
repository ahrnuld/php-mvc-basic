<?php
class SwitchRouter {
    public function route($uri) {    
        // using a simple switch statement to route URL's to controller methods
        switch($uri) {

            case '': 
                require __DIR__ . '/Controller/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;

            default:
                http_response_code(404);
                break;
        }
    }
}
?>