<?php

use App\Core\Requests;
use App\Core\Router;

require 'vendor/autoload.php';
require 'core/bootstrap.php';


Router::load('app/routes.php')->direct(Requests::uri(), Requests::method());
