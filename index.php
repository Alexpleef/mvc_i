<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require('vendor/autoload.php');
use Core\Router;
try{
    Router::start();
} catch (\Trowable $error){
    echo 'Error occurs! ' . $error->getMessage();
}
