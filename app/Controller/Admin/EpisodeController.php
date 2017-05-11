<?php

namespace App\Controller\Admin;

use App;

class EpisodeController extends AppController {

    public function commentSignal() {
        $countComment = App::getInstance()->getTable('commentaire')->countComment();
        return $countComment;
    }


    public function index() {
        $commentSignal = $this->commentSignal();
        $episodes = App::getInstance()->getTable('episode')->getThreeLAst();

        $this->render('admin.index', compact('episodes','commentSignal'));
    }


    public function livre() {
        $commentSignal = $this->commentSignal();
        $episodeNumber = App::getInstance()->getTable('episode')->countEpisode();
        $pageNumber = ceil($episodeNumber/10);

        $episodes = App::getInstance()->getTable('episode')->all();
        $this->render('admin.livre', compact('episodes','commentSignal'));
    }


    public function biographie() {
        $commentSignal = $this->commentSignal();
        $this->render('admin.biographie', compact('commentSignal'));
    }

    public function bibliographie() {
        $commentSignal = $this->commentSignal();
        $this->render('admin.bibliographie', compact('commentSignal'));
    }


    public function adminCommentaires() {
        $commentSignal = $this->commentSignal();
        $comments = App::getInstance()->getTable('commentaire')->getSignalComment();
        $this->render('admin.adminCommentaires', compact('commentSignal','comments'));
    }


    public function adminEpisodes() {
        $commentSignal = $this->commentSignal();
        $episodes = App::getInstance()->getTable('episode')->all();
        $this->render('admin.adminEpisodes', compact('commentSignal','episodes'));
    }


    public function episode() {

        $commentSignal = $this->commentSignal();
        $episode = App::getInstance()->getTable('episode')->find($_GET['id']);
        $commentaires = App::getInstance()->getTable('commentaire')->findAllChildren($_GET['id']);

        $success = false;

        if(isset($_POST) && !empty($_POST)) {
            $attributes = [
                'auteur' => $_POST['auteur'],
                'contenu' => $_POST['contenu'],
                'idEpisode' => $_POST['idEpisode'],
                'parent_id' => $_POST['parent_id'],
                'niveau' => $_POST['parent_level']
            ];

            $add = App::getInstance()->getTable('commentaire')->add($attributes);
            if($add) {
                $success = true;
                unset($_POST);
            }
        }
        $form = new \Core\HTML\BootstrapForm();
        $this->render('admin.episode', compact('episode', 'commentaires', 'form',
            'commentSignal',
            'success'));
    }


    public function edit()
    {
        $commentSignal = $this->commentSignal();

        $success = false;
        if (!empty($_POST)) {
            $resultat = App::getInstance()->getTable('episode')->update($_GET['id'], [
                'titre' => $_POST['titre'],
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

    public function add() {

        $commentSignal = $this->commentSignal();

        $success = false;

        if(!empty($_POST)) {
            $resultat = App::getInstance()->getTable('episode')->add([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu']
            ]);

            if($resultat) {
                $success = true;
            }
        }

        $form = new \Core\HTML\BootstrapForm();
        $this->render('admin.edit', compact('commentSignal','form', 'success'));
    }


    public function deleteEpisode() {

        $commentSignal = $this->commentSignal();


        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('episode')->delete($_POST['id']);
            header('Location: admin.php?page=adminEpisodes');
        }

    }



}