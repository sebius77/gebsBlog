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
    require '../views/accueil.php';
} elseif ($page === 'livre') {
    require '../views/livre.php';
} elseif ($page === 'aPropos') {
    require '../views/aPropos.php';
} elseif ($page === 'episode') {
    require '../views/episode.php';
} elseif($page === 'login') {
    require '../views/users/login.php';
}

$content = ob_get_clean();

require '../views/layout.php';

