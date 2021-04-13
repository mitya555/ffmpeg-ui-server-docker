<?php

require __DIR__ . '/source/Jacwright/RestServer/RestServer.php';
require 'RootController.php';

$server = new \Jacwright\RestServer\RestServer('debug');
$server->addClass('RootController');
$server->handle();

