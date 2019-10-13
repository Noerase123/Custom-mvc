<?php

// namespace controllers;

use libs\controllers\Controller;
use models\Help_Model;

class Help extends Controller {

    public function __construct() {
        
        parent::__construct();

    }

    function index() {
        $this->view->render('help/index');
    }

    public function other() {

        require 'models/help_model.php';

        $model = new Help_Model();
    }
}