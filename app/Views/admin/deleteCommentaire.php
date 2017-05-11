<?php

$commentaireTable = $app->getTable('commentaire');
if (!empty($_POST)) {
    $result = $commentaireTable->deleteWithChildren($_POST['id']);
    header('Location: admin.php');
}