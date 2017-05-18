<?php

namespace App\Controller\Admin;

use App;

class EpisodeController extends AppController {

    /**
     * permet de connaître le nombre de commentaires signalé
     * @return mixed
     */
    public function commentSignal() {
        $countComment = App::getInstance()->getTable('commentaire')->countComment();
        return $countComment;
    }


    /**
     * @return la vue de la page d'accueil
     */
    public function index() {
        $commentSignal = $this->commentSignal();
        $episodes = App::getInstance()->getTable('episode')->getThreeLAst();

        $this->render('admin.index', compact('episodes','commentSignal'));
    }


    /**
     * @return la vue de la page livre
     */
    public function livre() {

        $commentSignal = $this->commentSignal();
        $page = 1;

        $episodeNumber = App::getInstance()->getTable('episode')->countEpisode();
        $pageNumber = ceil($episodeNumber/4);
        $pageCurrent = App::getInstance()->getTable('episode')->getPage($page);

        $episodes = App::getInstance()->getTable('episode')->all();


        $this->render('admin.livre', compact('episodes','pageNumber','pageCurrent','page','commentSignal'));
    }


    /**
     * @return la vue de la page biographie en tant qu'administrateur
     */
    public function biographie() {
        $commentSignal = $this->commentSignal();
        $this->render('admin.biographie', compact('commentSignal'));
    }

    /**
     * @return la vue de la page bibliographie en tant qu'administrateur
     */
    public function bibliographie() {
        $commentSignal = $this->commentSignal();
        $this->render('admin.bibliographie', compact('commentSignal'));
    }


    /**
     * @return la vue d'administration des commentaires
     */
    public function adminCommentaires() {
        $commentSignal = $this->commentSignal();
        $comments = App::getInstance()->getTable('commentaire')->getAll();
        $this->render('admin.adminCommentaires', compact('commentSignal','comments'));
    }

    /**
     * @return la vue d'administration des commentaires
     */
    public function signalCommentaires() {
        $commentSignal = $this->commentSignal();
        $comments = App::getInstance()->getTable('commentaire')->getSignalComment();
        $this->render('admin.signalCommentaires', compact('commentSignal','comments'));
    }

    /**
     *
     * @return la vue d'administration des épisodes
     */
    public function adminEpisodes() {
        $commentSignal = $this->commentSignal();
        $episodes = App::getInstance()->getTable('episode')->all();
        $this->render('admin.adminEpisodes', compact('commentSignal','episodes'));
    }


    /**
     * Permet l'affichage de l'épisode et ses commentaires
     * avec la gestion de la pagination
     */
    public function episode() {

        //test si l'épisode existe
        $exist = App::getInstance()->getTable('episode')->find($_GET['id']);
        if($exist === false) {
            return App::getInstance()->notFoundAdmin();
        }


        $commentSignal = $this->commentSignal();
        $success = null;

        if(isset($_POST) && !empty($_POST)) {

            $regexAuteur = "#^[a-zA-Z0-9][a-zA-Z0-9]{2,15}$#";


            if(preg_match($regexAuteur,$_POST['auteur'])) {

                $attributes = [
                    'auteur' => htmlentities($_POST['auteur']),
                    'contenu' => htmlentities($_POST['contenu']),
                    'idEpisode' => $_POST['idEpisode'],
                    'parent_id' => $_POST['parent_id'],
                    'niveau' => $_POST['parent_level']
                ];

                $add = App::getInstance()->getTable('commentaire')->add($attributes);

                $success = true;

            } else {
                $success = false;
            }


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
        $this->render('admin.episode', compact('episode','nextEpisode', 'prevEpisode', 'commentaires',
            'form', 'success','commentSignal'));
    }


    /**
     * Permet l'édition d'un épisode
     */
    public function edit()
    {
        $commentSignal = $this->commentSignal();

        $success = false;
        if (!empty($_POST)) {
            $resultat = App::getInstance()->getTable('episode')->update($_GET['id'], [
                'titre' => htmlentities($_POST['titre']),
                'contenu' => $_POST['contenu']
            ]);

            if ($resultat) {
                $success = true;
            }

        }


        $episode = App::getInstance()->getTable('episode')->find($_GET['id']);
        $form = new \Core\HTML\BootstrapForm($episode);

        $this->render('admin.edit', compact('commentSignal','episode','form', 'success'));

    }


    /**
     * permet l'ajout d'un épisode
     */
    public function add() {

        $commentSignal = $this->commentSignal();

        $success = false;

        if(!empty($_POST)) {
            $resultat = App::getInstance()->getTable('episode')->add([
                'titre' => htmlentities($_POST['titre']),
                'contenu' => $_POST['contenu']
            ]);

            if($resultat) {
                $success = true;
            }
        }

        $form = new \Core\HTML\BootstrapForm();
        $this->render('admin.add', compact('commentSignal','form', 'success'));
    }


    /**
     * Permet la suppression d'un épisode via son id
     */
    public function deleteEpisode() {

        $commentSignal = $this->commentSignal();


        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('episode')->delete($_POST['id']);
            header('Location: admin.php?page=adminEpisodes');
        }

    }


    /**
     * Permet l'affichade des différents chapitre dans le sommaire avec une fonction ajax
     *
     * @return JSON
     */
    public function displayChapt() {

        $pageCurrent = App::getInstance()->getTable('episode')->getPage($_POST['numeroPage']);
        $resultat = [];

        foreach ($pageCurrent as $episode) {
            $resultat[] = '<p class="text-center"><a href="?page=episode&id=' . $episode->id  .' ">' . $episode->titre . '</a></p>';
        }

        echo json_encode($resultat);

    }



}