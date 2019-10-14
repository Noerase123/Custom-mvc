<?php

define('LIBS','libs/');
define('FW','framework/');
define('MODEL','models/');
define('CONTROLLER','controllers/');
define('CONFIG','config/');
define('ROUTES','routes/');

// libraries
require LIBS.'Bootstrap.php';
require LIBS.'Controller.php';
require LIBS.'Model.php';
require LIBS.'View.php';
require LIBS.'Methods.php';

// frameworks
require FW.'Db.php';
require FW.'DbHelper.php';
require FW.'ViewClass.php';
require FW.'LaravelLayout.php';

// models
require MODEL.'help_model.php';

// controllers
require CONTROLLER.'Index.php';
require CONTROLLER.'ErrorThrow.php';

// configurations
require CONFIG.'databases.php';
require CONFIG.'paths.php';

// routes
require ROUTES.'method.php';
require ROUTES.'routes.php';

$app = new Bootstrap();

