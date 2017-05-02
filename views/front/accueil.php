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

                <?php foreach($app->getTable('episode')->getThreeLast() as $item) : ; ?>



                    <p></p><a href="<?= $item->getUrl(); ?>"<?= $item->id; ?>><?= $item->titre; ?></a></p>
                <?php endforeach; ?>
            </ul>


        </div>
    </div>


</div>
