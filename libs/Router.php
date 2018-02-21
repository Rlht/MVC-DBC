<?php 
    // index to strona dla gości, wyświetlajaca udostępnione db
    class Router {
        function __construct() {
            $this->request = $_GET['url'];
            $this->request = rtrim($this->request, "/");
            $this->params = explode ("/", $this->request);
            $this->controller = ucfirst($this->params[0]);
            //MAPA
            
            $map = [
                "Index",
                "Admin",
            ];
            
            
            //MAPA
            if ($this->controller == "Index.php") { $this->controller = "Index";}
            if ($this->controller == "Admin.php") { $this->controller = "Admin";}
            if (in_array($this->controller,$map)) {
                $file = "controllers/".$this->controller.'.php';
                if (file_exists($file)) {
                    //włączenie kontrolera
                    require_once "$file";
                    $this->control = new $this->controller($this->params);
                }           
            } else {
                // przekierowanie na error
                header('HTTP/1.0 404 Not Found');
                echo "error do zrobienia";
            }
        }
    }