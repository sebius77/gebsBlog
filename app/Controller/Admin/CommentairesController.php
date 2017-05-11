<?php

namespace App\Controller\Admin;

use App;

class CommentairesController extends AppController {


    public function deleteCommentaire() {

        $success = false;
        if (!empty($_POST)) {
            $result = App::getInstance()->getTable('commentaire')->deleteWithChildren($_POST['id']);
            //header('Location: admin.php?page=adminCommentaires');

            if($result) {
                $success = true;
                $this->render('admin.adminCommentaires', compact('success','commentSignal'));
            }
        }
    }


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


}