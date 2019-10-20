<?php 

// namespace controllers;

use libs\controllers\Controller;

class Register extends Controller {

    function __construct() {
        parent::__construct();

    }

    function index() {
        
        $this->view->render('register/index');
    }

    function register() {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $post_arr = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'contact_no' => $contact,
            'username' => $email,
            'password' => $pass
        );
        
        $created = $this->helper->create('tbl_post', $post_arr);
        
        if ($created) {
            echo 'Success';
        } else {
            echo 'Failed';
        }
    }
}