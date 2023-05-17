<?php

require 'view/viewLoader.php';
require 'model/model.php';
require 'controller/controller.php';
require 'controller/ControllerP.php';

$pageURI = $_SERVER['REQUEST_URI'];
$pageURI = substr( $pageURI, strrpos($pageURI, 'index.php') + 10);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_POST = json_decode(file_get_contents('php://input'), true);
    new PostController($pageURI, $_POST);
    return;
}

if (!$pageURI)
    new Controller('home');
else
    new Controller($pageURI);


