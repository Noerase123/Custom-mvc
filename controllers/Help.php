<?php

class Help extends Controller {

    public function __construct() {
        
        parent::__construct();

        $this->view->render('help/index');
    }

    public function index() {
        
        echo 'this is my index function inside controller <br>';

        require 'models/help_model.php';

        $model = new Help_Model();
    }
}