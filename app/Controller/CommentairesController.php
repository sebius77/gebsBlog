<?php


namespace App\Controller;

use App;


class CommentairesController extends AppController
{

    public function SignalComment()
    {

        $successSignal = false;
        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('commentaire')->signal($_POST['id']);

            if ($result) {
                $successSignal = true;

            }
        }


        $this->render('front.episode', compact('successSignal'));

    }
}
