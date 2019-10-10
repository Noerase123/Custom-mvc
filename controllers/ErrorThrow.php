<?php

class ErrorThrow extends Controller {
    
    function __construct() {

        parent::__construct();
        echo 'This is an error!';
    }
}