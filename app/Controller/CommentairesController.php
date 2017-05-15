<?php


namespace App\Controller;

use App;

class CommentairesController extends AppController
{

    public function SignalComment()
    {

        $successSignal = false;
            $result = App::getInstance()->getTable('commentaire')->signal($_POST['idComment']);

            if ($result) {
                $successSignal = true;
            }
        echo $successSignal;
    }

}



