<?php

require __DIR__ . '/../vendor/autoload.php';

use MyApp\Http\Controllers\UserController;
use MyApp\Entities\UserEntity;

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler(__DIR__ . '/../logs/error.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');

// echo "ok.";

$user = new UserController();
$user = new UserEntity();

$data = new CreateDataBase();