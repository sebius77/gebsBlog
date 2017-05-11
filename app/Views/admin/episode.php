<?php
$episode = $app->getTable('episode')->find($_GET['id']);
?>

<h1><?= $episode->titre; ?></h1>

<p>
    <?= $episode->contenu; ?>
</p>

<div class="row">
    <ul class="pagination pull-right">
        <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
    </ul>
</div>


<h2>Commentaires</h2>

<?php foreach($app->getTable('commentaire')->getLastById($_GET['id']) as $commentaire) : ?>

    <h3><?= $commentaire->auteur . " " . $commentaire->date; ?></h3>
    <p><?= $commentaire->contenu; ?></p>
<?php endforeach; ?>
