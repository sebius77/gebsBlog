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


}