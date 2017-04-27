<?php

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT. '/app/App.php';
App::load();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'accueil';
}


// Auth
$app = App::getInstance();

$auth = new DBAuth($app->getDb());
if(!$auth->logged()) {
    $app->forbidden();
}



ob_start();

if ($page === 'accueil') {
    require '../views/admin/accueil.php';
} elseif ($page === 'livre') {
    require '../views/admin/livre.php';
} elseif ($page === 'aPropos') {
    require '../views/admin/aPropos.php';
} elseif ($page === 'episode') {
    require '../views/admin/episode.php';
} elseif ($page === 'admin') {
    require '../views/admin/admin.php';
}

$content = ob_get_clean();

require '../views/admin/layout.php';

