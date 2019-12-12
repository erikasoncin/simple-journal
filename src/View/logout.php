<?php

session_start();
chdir(dirname(__DIR__));

require "vendor/autoload.php";

use League\Plates\Engine;

$templates = new Engine('');

unset($_SESSION['email']); 
session_unset();
session_destroy();

session_start();
session_regenerate_id(true);
header('Location:index.php');