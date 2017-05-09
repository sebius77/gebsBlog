<?php

$episodeNumber = $app->getTable('episode')->countEpisode();
$pageNumber = ceil($episodeNumber/10);

?>

<div class="jumbotron">
    <h2 class="text-center">SOMMAIRE</h2>
    <hr/>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
    <?php

    for($i=1; $i<=$pageNumber; $i++) : ?>

        <li class="page-item"><a class="page-link" href="#"><?= $i; ?></a></li>

    <?php endfor; ?>
        </ul>
    </nav>

</div>


<?php foreach ($app->getTable('episode')->all() as $episode) : ?>

    <div class="panel panel-info">
        <div class="panel-heading"><strong><?= $episode->titre; ?></strong></div>
        <p><?= $episode->extrait; ?></p>
    </div>

<?php endforeach; ?>