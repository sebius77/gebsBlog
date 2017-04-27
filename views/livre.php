<?php foreach(App\Table\Episode::getLast() as $episode) : ?>

    <h1><?= $episode->titre; ?></h1>
    <p><?= $episode->extrait; ?></p>


<?php endforeach;


