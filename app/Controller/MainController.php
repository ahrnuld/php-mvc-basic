<?php
class Controller {
    
    function displayView($model) {        
        $directory = substr(get_class($this), 0, -10);
        $view = debug_backtrace()[1]['function'];
        require(realpath($_SERVER["DOCUMENT_ROOT"]) . "\View\\$directory\\$view.php");
    }

}