<?php

// configurations
require 'config/paths.php';
require CONFIG.'databases.php';

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

// routes
require ROUTES.'method.php';
require ROUTES.'routes.php';

$app = new Bootstrap();

