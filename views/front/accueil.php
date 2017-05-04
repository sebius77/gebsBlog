<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Présentation</strong>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus varius ornare.
                    Sed consequat odio sed turpis viverra pretium. Etiam luctus mauris sit amet est faucibus interdum.
                    Suspendisse potenti. Ut luctus non libero sed imperdiet. Cras viverra, dolor a porta finibus,
                    Phasellus mauris nisl, aliquet sed purus eget, pharetra varius eros. Cras efficitur eu purus vitae
                    egestas. Phasellus convallis augue ut ipsum varius, eu elementum neque ullamcorper. Morbi et eleifend libero.
                </p>
            </div>
        </div>
        <div class="col-lg-4">


                <div  class="panel panel-default">
                    <div class="panel-heading"><strong>Les derniers épisodes</strong></div>
                    <ul>
                <?php foreach($app->getTable('episode')->getThreeLast() as $item) : ; ?>

                        <li><a href="<?= $item->url; ?>"<?= $item->id; ?>><?= $item->titre; ?></a></li>


                <?php endforeach; ?>
                    </ul>
                </div>



        </div>
    </div>


</div>
