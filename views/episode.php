<?php

$episode = $app::getDb()->prepare('SELECT * FROM episode WHERE id= ?', [$_GET['id']], 'App\Table\Episode', true);
$commentaires = $app::getDb()->prepare('SELECT * FROM commentaire WHERE idEpisode = ?',[$episode->id],'App\Table\Commentaire');



?>

<h1><?= $episode->titre; ?></h1>
<p><?= $episode->contenu; ?></p>
<hr>

<h2>Commentaires</h2>

<?php foreach( $commentaires as $commentaire) : ?>

    <ul>
        <li><?= $commentaire->auteur . ' ' . $commentaire->date; ?></li>
        <p><?= $commentaire->contenu; ?></p>
    </ul>

<?php endforeach; ?>

