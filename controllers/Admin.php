<?php

class Admin extends Controller {
        function __construct($params) {
            parent::__construct();
            $this->view->controller = "Admin";
            $this->view->page = "LoginScreen";
            require_once 'models/Adminmod.php';
            $this->model = new Adminmod();
            if(!empty($_POST["login"]) || (!empty($_POST["pass"])))
            {
                $this->tryLogin($_POST["login"],$_POST["pass"]);
            } else {
                $this->blankLogin();
            }
            

            
        }
    private function tryLogin($log, $pass) {
        $this->view->var_test = $this->model->isCorrectDate($log, $pass);
        
        if (($this->view->var_test) == true) {
            $this->view->page = "Logged";
        } else {
            $this->view->page = "LoginScreen";
        }
        $this->view->Render();
    }
    private function blankLogin() {
        $this->view->Render();
    }
    }