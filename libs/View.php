<?php

namespace libs\views;

class View {
    
    function __construct() {
        
    }

    public function render($name) {

        require 'views/layouts/header.php';
        require 'views/'.$name.'.php';
        require 'views/layouts/footer.php';
    }

    public function loginPage() {
        require 'views/layouts/header.php';
        require 'views/login/index.php';
    }

}
