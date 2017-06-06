<?php

namespace App\Controller;

use App;


/**
 * Class CommentairesController
 * @package App\Controller
 */

class CommentairesController extends AppController
{


    /**
     * Méthode permettant de signaler un commentaire
     * @return bool
     */
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