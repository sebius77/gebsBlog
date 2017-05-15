<?php


namespace App\Controller;

use App;


class EpisodeController extends AppController {


    public function index() {
        $episodes = App::getInstance()->getTable('episode')->getThreeLAst();

        $this->render('front.index', compact('episodes'));

    }


    public function livre() {

        $page = 1;


        $episodeNumber = App::getInstance()->getTable('episode')->countEpisode();
        $pageNumber = ceil($episodeNumber/4);

        $pageCurrent = App::getInstance()->getTable('episode')->getPage($page);

        $episodes = App::getInstance()->getTable('episode')->all();



        $this->render('front.livre', compact('episodes','pageNumber','pageCurrent','page'));
    }




    public function displayChapt() {

       $pageCurrent = App::getInstance()->getTable('episode')->getPage($_POST['numeroPage']);
       $resultat = [];

       foreach ($pageCurrent as $episode) {
           $resultat[] = '<p class="text-center"><a href="?page=episode&id=' . $episode->id  .' ">' . $episode->titre . '</a></p>';
       }

        echo json_encode($resultat);

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

    public function bibliographie() {
        $this->render('front.bibliographie');
    }

    public function biographie() {
        $this->render('front.biographie');
    }


}