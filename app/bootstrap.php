<?php
//Load Config
require_once 'config/config.php';


//Autoloader for Core Libraries
spl_autoload_register(function ($className) {
	require_once 'libraries/' . $className . '.php';
});

