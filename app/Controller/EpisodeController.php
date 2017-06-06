<?php


namespace App\Controller;

use App;

/**
 * Class EpisodeController
 * @package App\Controller
 * Controleur et méthodes pour les épisodes
 */
class EpisodeController extends AppController {

    /**
     * retourne la vue accueil
     */
    public function index() {
        $episodes = App::getInstance()->getTable('episode')->getThreeLAst();

        $this->render('front.index', compact('episodes'));

    }

    /**
     * Retourne la vue de la page livre
     */
    public function livre() {

        $page = 1;

        $episodeNumber = App::getInstance()->getTable('episode')->countEpisode();
        $pageNumber = ceil($episodeNumber/4);

        $pageCurrent = App::getInstance()->getTable('episode')->getPage($page);

        $episodes = App::getInstance()->getTable('episode')->all();

        $this->render('front.livre', compact('episodes','pageNumber','pageCurrent','page'));
    }


    /**
     * Permet l'affichade des différents chapitre dans le sommaire
     *
     *
     */
    public function displayChapt() {

       $pageCurrent = App::getInstance()->getTable('episode')->getPage($_POST['numeroPage']);
       $resultat = [];

       foreach ($pageCurrent as $episode) {
           $resultat[] = '<p class="text-center"><a href="?page=episode&id=' . $episode->id  .' ">' . $episode->titre . '</a></p>';
       }

        echo json_encode($resultat);

    }


    /**
     * @return Object Episode
     * @return Object Commentaires
     * Retourne la vue d'un épisode et de ses commentaires
     */
    public function episode() {

        //test si l'épisode existe
        $exist = App::getInstance()->getTable('episode')->find($_GET['id']);

        // Si l'épisode n'existe pas, on est redirigé vers une page NotFound
        if($exist === false) {
            return App::getInstance()->notFoundFront();
        }


        // Initialisation de la variable $success à null
        $success = null;

        // Si $_POST existe (le formulaire est validé) et les champs ne sont pas vides.
        // On vérifie la Regex
        if(isset($_POST) && !empty($_POST)) {

            $regexAuteur = "#^[a-zA-Z0-9][a-zA-Z0-9]{2,15}$#";


            // Si la fonction preg_match renvoit true alors on remplit le tableau attribut
            if(preg_match($regexAuteur,$_POST['auteur'])) {

                $attributes = [
                    'auteur' => htmlentities($_POST['auteur']),
                    'contenu' => htmlentities($_POST['contenu']),
                    'idEpisode' => $_POST['idEpisode'],
                    'parent_id' => $_POST['parent_id'],
                    'niveau' => $_POST['parent_level']
                ];

                // On ajoute le commentaire et on renvoit true
                $add = App::getInstance()->getTable('commentaire')->add($attributes);

                $success = true;

            } else {
                $success = false;
            }


        }

        // Pagination de la page épisode

        // On récupère tous les épisodes par le id
        $episodesId = App::getInstance()->getTable('episode')->allEpisodeById();

        // On crée un tableau et on ajoute tous les id des épisodes
        $tabId = [];
        foreach ($episodesId as $item) {
            $tabId[] = $item->id;
        }

        // On compte le nombre d'épisodes
        $nbrEpisode = count($tabId);

        //renvoi l'index de l'épisode
        $currentIndex = array_search($_GET['id'],$tabId);

        if($currentIndex < $nbrEpisode -1 ) {
            $nextEpisode = $tabId[$currentIndex + 1];
        } else {
            $nextEpisode = $tabId[$currentIndex];
        }
        if($currentIndex > 0) {
            $prevEpisode = $tabId[$currentIndex - 1];
        } else {
            $prevEpisode = $tabId[$currentIndex];
        }

        // On récupère l'épisode avec son id
        $episode = App::getInstance()->getTable('episode')->find($_GET['id']);

        // On récupère les commentaires et leurs enfants avec l'id de l'épisode
        $commentaires = App::getInstance()->getTable('commentaire')->findAllChildren($_GET['id']);


        // On instancie la classe pour les formulaires
        $form = new \Core\HTML\BootstrapForm();

        // On retourne la vue et tous ses paramètres
        $this->render('front.episode', compact('episode',
            'nextEpisode',
            'prevEpisode',
            'commentaires',
            'form',
            'success'));
    }




    /**
     * Retourne la vue de la page bibliographie
     */
    public function bibliographie() {
        $this->render('front.bibliographie');
    }

    /**
     * Retourne la vue de la page biographie
     */
    public function biographie() {
        $this->render('front.biographie');
    }


}