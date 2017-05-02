<?php
$episode = $app->getTable('episode')->find($_GET['id']);
?>

<h1><?= $episode->titre; ?></h1>

<p>
    <?= $episode->contenu; ?>
</p>

<h2>Commentaires</h2>

<?php foreach($app->getTable('commentaire')->getLastById($_GET['id']) as $commentaire) : ?>

    <h3><?= $commentaire->auteur . " " . $commentaire->date; ?></h3>
    <p><?= $commentaire->contenu; ?></p>
<?php endforeach; ?>
