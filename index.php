<?php

include 'models/Database.php';
include 'models/HomeModel.php';
include 'pages/Page.php';
include 'pages/Home.php';
include 'pages/News.php';

$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home' ;
$action = isset($_GET['action']) && $_GET['action'] ? $_GET['action'] : 'index';

$page = ucfirst(strtolower($page));
$action = strtolower($action);

if(class_exists($page)) {
    $p = new $page();
    if(method_exists($page, $action)) {
        $p->$action();
    } else {
        echo 'METHOD NOT FOUND';
    }
} else {
    echo 'ERORR 404, PAGE NOT FOUND';
}

