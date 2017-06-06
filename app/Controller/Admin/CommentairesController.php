<?php

namespace App\Controller\Admin;

use App;

/**
 * Class CommentairesController
 * @package App\Controller\Admin
 */
class CommentairesController extends AppController {

    /**
     * Permet la suppression d'un commentaire
     */
    public function deleteCommentaire() {

        $success = false;
        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('commentaire')->deleteWithChildren($_POST['id']);


            if($result) {
                $success = true;
                header('Location: admin.php?page=adminCommentaires');
            }
        }
    }

    /**
     * Permet de signaler un commentaire
     */
    public function SignalComment() {

        $success = false;
        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('commentaire')->update($_POST['id']);

            if($result) {
                $success = true;
                $this->render('admin.adminCommentaires', compact('success','commentSignal'));
            }
        }
    }

    /**
     * Permet de valider de nouveau un commentaire signalé
     */
    public function validComment() {
        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('commentaire')->valid($_POST['id']);
            header('Location: admin.php?page=adminCommentaires');
        }
    }

}