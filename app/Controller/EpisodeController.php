<?php


namespace App\Controller;

use App;


class EpisodeController extends AppController {


    public function index() {
        $episodes = App::getInstance()->getTable('episode')->getThreeLAst();

        $this->render('front.index', compact('episodes'));

    }


    public function livre() {
        $episodeNumber = App::getInstance()->getTable('episode')->countEpisode();
        $pageNumber = ceil($episodeNumber/10);

        $episodes = App::getInstance()->getTable('episode')->all();
        $this->render('front.livre', compact('episodes'));


    }


    public function episode() {


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
        $this->render('front.episode', compact('episode', 'commentaires', 'form', 'success'));



    }



}