<?php foreach ($app->getTable('episode')->all() as $episode) : ?>

    <div class="panel panel-default">
        <div class="panel-heading"><strong><?= $episode->titre; ?></strong></div>
        <p><?= $episode->extrait; ?></p>
    </div>

<?php endforeach; ?>