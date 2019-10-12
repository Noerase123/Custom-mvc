<?php

// namespace controllers;

use libs\controllers\Controller;

class ErrorThrow extends Controller {
    
    function __construct() {

        parent::__construct();
        echo 'This is an error!';

        $this->view->msg = 'This page do not exist';
        $this->view->render('error/index');
    }
}