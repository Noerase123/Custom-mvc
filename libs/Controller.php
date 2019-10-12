<?php

namespace libs\controllers;

use libs\views\View;

class Controller
{
    function __construct() {

        $this->view = new View();
    }
}
