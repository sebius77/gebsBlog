<?php

$episode = \App\Table\Episode::find($_GET['id']);
$commentaires = \App\Table\Commentaire::getLastById($_GET['id']);


?>

<h1><?= $episode->titre ?></h1>
<p><?= $episode->contenu; ?></p>
<hr>

<h2>Commentaires</h2>

<?php foreach($commentaires as $commentaire) : ?>

  <h3>  <?= $commentaire->auteur . ' ' . $commentaire->date;   ?></h3>
    <p><?= $commentaire->contenu; ?></p>

<?php endforeach; ?>
