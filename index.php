<?php

// libraries
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';
require 'libs/Methods.php';

require 'models/help_model.php';


require 'controllers/Index.php';
require 'controllers/ErrorThrow.php';

// configurations
require 'config/databases.php';
require 'config/paths.php';

// routes
require 'routes/method.php';
require 'routes/routes.php';

$app = new libs\bootstrap\Bootstrap();

