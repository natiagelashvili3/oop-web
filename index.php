<?php

include 'Helpers/Session.php';
include 'Models/Database.php';
include 'Models/HomeModel.php';
include 'Models/UserModel.php';
include 'Pages/Page.php';
include 'Pages/Home.php';
include 'Pages/News.php';
include 'Pages/Admin/Page.php';
include 'Pages/Admin/Home.php';
include 'Pages/Admin/News.php';
include 'Pages/Admin/Categories.php';
include 'Pages/Admin/Login.php';

$type = isset($_GET['type']) && $_GET['type'] == 'admin' ? $_GET['type'] : null ;
$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home' ;
$action = isset($_GET['action']) && $_GET['action'] ? $_GET['action'] : 'index';

$page = ucfirst(strtolower($page)); // Home
$action = strtolower($action);

if($type) {
    $page = 'Admin\\' . $page; // Admin\Home
}

$page = 'Pages\\' . $page; // Pages\Admin\Home

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

