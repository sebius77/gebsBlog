<?php foreach ($app->getTable('episode')->all() as $episode) : ?>

    <h1><?= $episode->titre; ?></h1>
    <p><?= $episode->extrait; ?></p>

<?php endforeach; ?>