<?php

namespace controllers;

use libs\controllers\Controller;

class Index extends Controller  {

    function __construct() {
        parent::__construct();

    }

    function index() {
        $this->view->render('index/index');
    }

    function login() {
        header("location: ".URL."Login");
    }

}