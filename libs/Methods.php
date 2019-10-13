<?php

namespace libs\methods;

use libs\controllers\Controller;

 class Methods extends Controller{

    public function redirect($get) {

        $rmGet = str_replace('.','/',$get);
        
        return $this->view->render($rmGet);

    }
 }