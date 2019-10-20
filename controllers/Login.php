<?php

// namespace controllers;

use libs\controllers\Controller;
use libs\methods\Methods;
use models\Help_Model;

class Login extends Controller {

    function __construct() {
        parent::__construct();

        $this->method = new Methods();

    }

    function index() {
        
        $this->view->loginPage();
    }

    function login_user() {
        
        $email = $_POST['email'];

        $table = 'tbl_post';

        $query = "SELECT username FROM $table WHERE username='$email' ";

        $success = $this->helper->customQuery($query);

        if ($success) {
            session_start();
            $_SESSION['user'] = $email;
            $this->view->render('home/index');
        } else {
            $this->view->loginPage('login/index');
        }
    }

    function logout() {

        session_start();
        session_destroy();
        $this->view->loginPage('login/index');

    }
    
}