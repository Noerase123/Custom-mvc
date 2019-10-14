<?php

namespace routes;

use libs\views\View;

class Method {

    function get($get) {

        $g = $_GET;

        return $g[$get];
        
    }

    function post($post) {

        $p = $_POST;

        return $p[$post];
    }
}

$route = new Method();