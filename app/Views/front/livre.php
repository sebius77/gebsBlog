<div class="jumbotron">
    <h2 class="text-center">SOMMAIRE</h2>
    <hr/>

    <?php for($i=0; $i<=$page; $i++): ?>



    <?php endfor; ?>

    <nav class="text-center" aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a id="pagePrev" class="page-link">Précédent</a></li>

    <?php for($i=1; $i<=$pageNumber; $i++) : ?>

        <li class="page-item"><a id="page-<?= $i; ?>" class="page-link"><?= $i; ?></a></li>

    <?php endfor; ?>
            <li class="page-item"><a id="pageNext" class="page-link">Suivant</a></li>
        </ul>
    </nav>


</div>


<?php foreach ($episodes as $episode) : ?>

    <div class="panel panel-info">
        <div class="panel-heading"><strong><?= $episode->titre; ?></strong></div>
        <p><?= $episode->extrait; ?></p>
    </div>

<?php endforeach; ?>