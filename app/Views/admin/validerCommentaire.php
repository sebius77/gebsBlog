<?php

$commentaireTable = $app->getTable('commentaire');
if (!empty($_POST)) {
    $result = $commentaireTable->valid($_POST['id']);
    header('Location: admin.php');
}