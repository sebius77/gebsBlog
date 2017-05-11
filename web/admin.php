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
    require '../app/Views/admin/accueil.php';
} elseif ($page === 'livre') {
    require '../app/Views/admin/livre.php';
} elseif ($page === 'aPropos') {
    require '../app/Views/admin/aPropos.php';
} elseif ($page === 'episode') {
    require '../app/Views/admin/episode.php';
} elseif ($page === 'admin') {
    require '../app/Views/admin/accueil.php';
} elseif ($page === 'episode.edit') {
    require '../app/Views/admin/edit.php';
} elseif ($page === 'episode.add') {
    require '../app/Views/admin/add.php';
} elseif ($page === 'episode.delete') {
    require '../app/Views/admin/delete.php';
} elseif($page === 'adminCommentaires') {
    require '../app/Views/admin/adminCommentaires.php';
} elseif($page === 'adminEpisodes') {
    require '../app/Views/admin/adminEpisodes.php';
} elseif($page === 'commentaire.delete') {
    require '../app/Views/admin/deleteCommentaire.php';
} elseif($page === 'commentaire.valider') {
    require '../app/Views/admin/validerCommentaire.php';
} elseif($page === 'disconnect') {
    require '../app/Views/users/disconnect.php';
} elseif($page === 'biographie') {
    require '../app/Views/admin/biographie.php';
} elseif($page === 'bibliographie') {
    require '../app/Views/admin/bibliographie.php';
}

$content = ob_get_clean();

require '../app/Views/templates/layoutAdmin.php';

