<?php 
class View {
    
    function __construct() {}
    
    public function Render () {
        
        require_once 'views/Header.php';
        $plik = "";
        if (isset($this->controller) && isset($this->page)){
        
        $plik = 'views/'.$this->controller."/".$this->page.".php";
        }
        if (file_exists($plik)) {
            require_once $plik;
        } else {
            $this->message = "Nie znaleziono pliku";
            require_once 'views/Error.php';
        }
        require_once 'views/Footer.php';
    }
}