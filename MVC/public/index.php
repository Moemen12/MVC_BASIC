<?php

session_start();


require '../app/cors/init.php';

$app = new App;

$app->loadController();
