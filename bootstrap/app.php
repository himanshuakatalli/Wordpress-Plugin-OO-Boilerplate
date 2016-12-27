<?php

$autoloader = require "./../vendor/autoload.php";

$autoloader->add('Bootstrap\\', __DIR__);
$autoloader->add('App\\', __DIR__.'/../src/app/');
$autoloader->add('Inc\\', __DIR__.'/../src/inc/');

$plugin = Bootstrap\PrefixPlugin::getPluginInstance();

return $plugin;