
<div class="jumbotron">
    <h1>SOMMAIRE</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <
</div>


<?php foreach ($app->getTable('episode')->all() as $episode) : ?>

    <div class="panel panel-info">
        <div class="panel-heading"><strong><?= $episode->titre; ?></strong></div>
        <p><?= $episode->extrait; ?></p>
    </div>

<?php endforeach; ?>