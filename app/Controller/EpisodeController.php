<?php


namespace App\Controller;

use App;


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


        if(isset($_POST) && !empty($_POST)) {
            $attributes = [
                'auteur' => $_POST['auteur'],
                'contenu' => $_POST['contenu'],
                'idEpisode' => $_POST['idEpisode'],
                'parent_id' => $_POST['parent_id'],
                'niveau' => $_POST['niveau']
            ];

            $add = App::getInstance()->getTable('commentaire')->add($attributes);
        }

        $episodesId = App::getInstance()->getTable('episode')->allEpisodeById();
        $tabId = [];
        foreach ($episodesId as $item) {
            $tabId[] = $item->id;
        }

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

        $episode = App::getInstance()->getTable('episode')->find($_GET['id']);
        $commentaires = App::getInstance()->getTable('commentaire')->findAllChildren($_GET['id']);



        $form = new \Core\HTML\BootstrapForm();
        $this->render('front.episode', compact('episode','nextEpisode', 'prevEpisode', 'commentaires', 'form', 'success'));
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