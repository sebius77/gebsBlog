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

if (($page === 'admin') || ($page === 'accueil'))  {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->index();
} elseif ($page === 'livre') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->livre();
}  elseif ($page === 'episode') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->episode();
} elseif ($page === 'episode.edit') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->edit();
} elseif ($page === 'episode.add') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->add();
} elseif ($page === 'episode.delete') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->deleteEpisode();
} elseif($page === 'adminCommentaires') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->adminCommentaires();
    } elseif($page === 'adminEpisodes') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->adminEpisodes();
} elseif($page === 'commentaire.delete') {
    $controller = new \App\Controller\Admin\CommentairesController();
    $controller->deleteCommentaire();
} elseif($page === 'commentaire.valider') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->validateComment();
} elseif($page === 'disconnect') {
    $controller = new \App\Controller\Admin\UsersController();
    $controller->disconnect();
} elseif($page === 'biographie') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->biographie();
} elseif($page === 'bibliographie') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->bibliographie();
}