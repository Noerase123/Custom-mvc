<?php

// namespace controllers;

use libs\controllers\Controller;
use models\Help_Models;

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