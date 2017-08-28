<?php

$app = [];

$app['config'] = require 'config.php';

require 'vendor/autoload.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

