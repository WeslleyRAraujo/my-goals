<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/functions.php';

$ormConnections = (new \MyGoals\Classes\GlobalConnection())->getConnection();

$orm = $ormConnections[0];
$database = $ormConnections[1];
