<?php
define('VERSION', '3.1.0.0_b');

// Configuration

require_once "../config.php"; // common configuration
require_once "config.php"; //  configuration specific for admin application

// auto load class
spl_autoload_register(function ($name) {
    $name = strtolower($name);
    include_once "../admin/models/$name.php";
    include_once "controllers/$name.php";
});
include_once "../admin/mylib.php";

// get controller and action from URL
$controller = isset($_GET["controller"]) ? $_GET["controller"] : NULL;
$action     = isset($_GET["action"]) ? $_GET["action"] : NULL;