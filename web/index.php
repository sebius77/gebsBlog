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

//ob_start();

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
    $controller = new \App\Controller\EpisodeController();
    $controller->index();
    //require '../app/Views/users/login.php';
} elseif($page === 'commentaire.signaler') {
    $controller = new \App\Controller\EpisodeController();
    $controller->index();
    require '../app/Views/front/signaler.php';
} elseif($page === 'biographie') {
    $controller = new \App\Controller\EpisodeController();
    $controller->index();
    require '../app/Views/front/biographie.php';
}

//$content = ob_get_clean();

//require '../app/views/templates/layout.php';

