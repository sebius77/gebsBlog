<?php

define('ROOT', dirname(__DIR__));
require ROOT. '/app/App.php';
App::load();

$app = App::getInstance();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'accueil';
}

if ($page === 'accueil') {
    $controller = new \App\Controller\EpisodeController();
    $controller->index();
} elseif ($page === 'livre') {
    $controller = new \App\Controller\EpisodeController();
    $controller->livre();
} elseif ($page === 'bibliographie') {
    $controller = new \App\Controller\EpisodeController();
    $controller->bibliographie();
} elseif ($page === 'episode') {
    $controller = new \App\Controller\EpisodeController();
    $controller->episode();
} elseif($page === 'login') {
    $controller = new \App\Controller\Admin\UsersController();
    $controller->login();
} elseif($page === 'commentaire.signale') {
    $controller = new \App\Controller\CommentairesController();
    $controller->signalComment();
} elseif($page === 'biographie') {
    $controller = new \App\Controller\EpisodeController();
    $controller->biographie();
} elseif ($page === 'choixPage'){
    $controller = new \App\Controller\EpisodeController();
    $controller->displayChapt();
} else {
    $app->notFound();
}