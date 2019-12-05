<?php

use Todo\App;
use Todo\Database\QueryBuilder;
use Todo\Database\Connection;

require '../vendor/autoload.php';

$config = require '../config.php';

App::bind('config', $config);
App::bind('database', Connection::make(App::get('config')['database']));
App::bind('database', Connection::make(App::get('config')['database']));
