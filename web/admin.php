<?php

define('ROOT', dirname(__DIR__));
require ROOT. '/app/App.php';
App::load();

$app = App::getInstance();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'admin';
}

if (($page === 'admin') || ($page === 'accueil'))  {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->index();
} elseif ($page === 'livre') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->livre();
}  elseif ($page === 'episode') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->setTemplate('layoutAdmin2');
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
} elseif($page === 'signalCommentaires') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->signalCommentaires();
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
    $controller = new \App\Controller\Admin\CommentairesController();
    $controller->validComment();
} elseif($page === 'disconnect') {
    $controller = new \App\Controller\Admin\UsersController();
    $controller->disconnect();
} elseif($page === 'biographie') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->biographie();
} elseif($page === 'bibliographie') {
    $controller = new \App\Controller\Admin\EpisodeController();
    $controller->bibliographie();
} else {
    $app->notFoundAdmin();
}