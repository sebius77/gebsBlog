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

ob_start();

if ($page === 'accueil') {
    require '../views/front/accueil.php';
} elseif ($page === 'livre') {
    require '../views/front/livre.php';
} elseif ($page === 'bibliographie') {
    require '../views/front/bibliographie.php';
} elseif ($page === 'episode') {
    require '../views/front/episode.php';
} elseif($page === 'login') {
    require '../views/users/login.php';
} elseif($page === 'commentaire.signaler') {
    require '../views/front/signaler.php';
} elseif($page === 'biographie') {
    require '../views/front/biographie.php';
}

$content = ob_get_clean();

require '../views/templates/layout.php';

