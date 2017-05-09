<?php

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT. '/app/App.php';
App::load();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'admin';
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
    require '../views/admin/accueil.php';
} elseif ($page === 'episode.edit') {
    require '../views/admin/edit.php';
} elseif ($page === 'episode.add') {
    require '../views/admin/add.php';
} elseif ($page === 'episode.delete') {
    require '../views/admin/delete.php';
} elseif($page === 'adminCommentaires') {
    require '../views/admin/adminCommentaires.php';
} elseif($page === 'adminEpisodes') {
    require '../views/admin/adminEpisodes.php';
} elseif($page === 'commentaire.delete') {
    require '../views/admin/deleteCommentaire.php';
} elseif($page === 'commentaire.valider') {
    require '../views/admin/validerCommentaire.php';
}

$content = ob_get_clean();

require '../views/templates/layoutAdmin.php';

