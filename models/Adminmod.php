<?php
// INSERT INTO `admin`(`id`, `login`, `password`, `lastlogin`) VALUES (NULL,'AdminAdam','admin123',NOW()) Linia dodająca admina
class Adminmod extends Model{
    function __construct() {
        parent::__construct();
              
    }
    public function isLogged() {
        
    }
    public function isCorrectDate($log, $pass) {
        $this->query = $this->SelectAdmin('*', 'admin', $log, $pass);
        if(empty($this->query)) {
            $answer = false;
        } else {
            $answer = true;
        }
        return ($answer);
        
    }
}
