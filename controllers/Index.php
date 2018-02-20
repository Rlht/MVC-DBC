<?php
    class Index extends Controller {
        function __construct($params) {
            parent::__construct();
            $this->view->controller = "Index";
            $this->view->page = "Main";
            require_once 'models/Indexmod.php';
            $this->model = new Indexmod();
            $this->Main();

            
        }
    private function Main() {
        $this->view->DBsNames = $this->model->DBsNames();
        $this->view->Render();
    }
    }