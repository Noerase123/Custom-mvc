<?php

namespace libs\controllers;

use libs\views\View;
use framework\Db;
use framework\DbHelper;
use framework\ViewClass;

class Controller
{
    function __construct() {

        $this->view = new View();
        $this->db = new Db();
        $this->helper = new DbHelper();
        $this->viewer = new ViewClass();
    }
}
