<?php
ini_set('display_errors', 1);
include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;


$url = explode("?",  $_SERVER['REQUEST_URI'])[0];
if($url === '/') {
    $c = new IndexController();
    $c->indexAction();   
} elseif($url === '/login') {
    $c = new Indexcontroller();
    $c->loginAction();
}elseif($url === '/produtos') {
    $c = new ProductController();
    $c->listAction();
} else {
    $error = new ErrorController();
    $error->notFoundAction();
}

// $c = new IndexController();
// // $c->indexAction();
// $c->loginAction();

// $p = new ProductController();

// $p->listAction();
// $p->addAction();
// $p->editAction();


// $category = new CategoryController();
// $category->listAction();

