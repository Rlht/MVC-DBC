<?php 
    // index to strona dla gości, wyświetlajaca udostępnione db
    class Router {
        function __construct() {
            $this->request = $_GET['url'];
            $this->request = rtrim($this->request, "/");
            $this->params = explode ("/", $this->request);
            $this->controller = $this->params[0];
            if ($this->controller == "index.php") $this->controller = "Index";
            $file = "controllers/".$this->controller.'.php';
            if (file_exists($file)) {
                //włączenie kontrolera
                require_once "$file";
                $this->control = new $this->controller($this->params);
            } else {
                // przekierowanie na error
                header('HTTP/1.0 404 Not Found');
                echo "error do zrobienia";
            }
        }
    }