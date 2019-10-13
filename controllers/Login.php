<?php

// namespace controllers;

use libs\controllers\Controller;
use libs\methods\Methods;
use models\Help_Model;

class Login extends Controller {

    function __construct() {
        parent::__construct();

        $this->method = new Methods();

        $this->model = new Help_Model();

    }

    function index() {
        
        $this->method->redirect('login.index');
    }

    function auth() {

        $this->method->redirect('index.index');
    }

    function helpOther() {

        $this->model;
    }
}