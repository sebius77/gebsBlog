<?php


$commentaireTable = $app->getTable('commentaire');
if (!empty($_POST)) {
    $result = $commentaireTable->signal($_POST['id']);
    header('Location: ?page=episode&id=' . $_POST['idEpisode']);
}