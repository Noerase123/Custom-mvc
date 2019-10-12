<?php

// namespace controllers;

use libs\controllers\Controller;

class Login extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->render('login/index');
    }
}