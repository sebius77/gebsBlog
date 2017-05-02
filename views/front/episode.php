<?php

//$episode = \App\Table\Episode::find($_GET['id']);
$episode = $app->getTable('episode')->find($_GET['id']);
//$commentaires = \App\Table\Commentaire::getLastById($_GET['id']);
//$commentaires = $app->getTable('commentaire')->getLastById($_GET['id']);

?>

<h1><?= $episode->titre ?></h1>
<p><?= $episode->contenu; ?></p>
<hr>

<h2>Commentaires</h2>

