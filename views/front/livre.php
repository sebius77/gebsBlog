
<div class="jumbotron">
    <h2 class="text-center">SOMMAIRE</h2>
    <hr/>

</div>


<?php foreach ($app->getTable('episode')->all() as $episode) : ?>

    <div class="panel panel-info">
        <div class="panel-heading"><strong><?= $episode->titre; ?></strong></div>
        <p><?= $episode->extrait; ?></p>
    </div>

<?php endforeach; ?>