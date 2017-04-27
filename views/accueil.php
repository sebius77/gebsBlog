<?php

$episodes = App::getDb()->query('SELECT id,titre,date FROM episode ORDER BY date DESC LIMIT 5', 'App\Table\Episode');

?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1>Présentation</h1>
            <p>
                Texte de présentation du site...
            </p>
        </div>
        <div class="col-lg-4">

            <ul>
                <?php foreach($episodes as $episode) : ?>
                    <li><a href="<?= $episode->url; ?>"><?= $episode->titre . ' ' . $episode->date; ?></a></li>
                <?php endforeach; ?>

            </ul>


        </div>
    </div>


</div>
