<?php


namespace App\Controller;

use App;


class CommentairesController extends AppController
{

    public function SignalComment()
    {

        /*
        $successSignal = false;

            $result = App::getInstance()->getTable('commentaire')->signal($_POST['id']);

            if ($result) {
                $successSignal = true;
            }

        return $successSignal;

        //$this->render('front.episode', compact('successSignal'));
        */
        echo $_POST;

    }
}
