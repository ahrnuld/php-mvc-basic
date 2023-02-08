<?php
// Initialize the session
require __DIR__ . '/MainController.php';


class HomeController extends Controller {

    function __construct() {
    }

    public function index() {
        require __DIR__ . "/../View/Home/index.php";    
          
    }
}
?>
