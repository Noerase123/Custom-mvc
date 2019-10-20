<?php

// namespace controllers;

use libs\controllers\Controller;
use models\Help_Model;

class Home extends Controller {

    public function __construct() {
        
        parent::__construct();

    }

    function index() {
        
        if (isset($_SESSION['user'])) {

            $this->view->render('home/index');
        } else {
            
            $this->view->loginPage();
        }
    }

    public function other() {

        require 'models/help_model.php';

        $model = new Help_Model();
    }
}