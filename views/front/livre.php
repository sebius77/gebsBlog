<?php

$allEpisode = App\Table\Episode::all();
$lastEpisodes = App\Table\Episode::getLast();

?>

    <h2>Liste des épisodes</h2>
<p>
    <?php foreach($allEpisode as $chapt) : ?>

        <h4><?= $chapt->titre; ?></h4>

    <?php endforeach; ?>
</p>

<?php foreach($lastEpisodes as $episode) : ?>

    <h1><?= $episode->titre; ?></h1>
    <p><?= $episode->extrait; ?></p>


<?php endforeach;


