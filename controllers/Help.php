<?php

class Help extends Controller {

    public function __construct() {
        
        parent::__construct();
        echo 'We are help controller <br>';
    }

    public function index() {
        
        echo 'this is my index function inside controller <br>';
    }
}