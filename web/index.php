<?php



// On définit une constante ROOT qui est le chemin racine(gebsBlog)
define('ROOT', dirname(__DIR__));

// On charge la classe App.php qui s'occupe de charger les autoloader
// des répertoires app et Core
require ROOT. '/app/App.php';
App::load();

// On instancie la classe App avec une méthode statique
// et un Design PAttern : singleton.
// Ceci pour réutiliser l'instance n'importe ou dans notre code
$app = App::getInstance();


// Nous récupérons la requête de l'utilsateur, l'url sélectionnée.
// Si le parametre page n'esiste pas la page par défaut est l'accueil
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'accueil';
}



// En fonction de la demande utilisateur
// On redirige sur le bon contrôleur et la bonne méthode
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
    $app->notFoundFront();
}