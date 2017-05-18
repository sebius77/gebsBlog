<div class="jumbotron">
    <h2 class="text-center">SOMMAIRE</h2>
    <hr/>

    <div id="pageSommaire" title="<?= $page; ?>"  nbrePage="<?= $pageNumber; ?>">
    <?php foreach($pageCurrent as $chapt): ?>

        <p class="text-center"><a href="?page=episode&id=<?= $chapt->id; ?>"><?= $chapt->titre; ?></a></p>

    <?php endforeach; ?>
    </div>

    <nav class="text-center" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item" id="pagePrev"><a href="#">Précédent</a></li>

    <?php for($i=1; $i<=$pageNumber; $i++) : ?>

        <li class="page-item" id="page-<?= $i; ?>"><a href="#"><?= $i; ?></a></li>

    <?php endfor; ?>
            <li class="page-item" id="pageNext"><a href="#">Suivant</a></li>
        </ul>
    </nav>


</div>


<?php foreach ($pageCurrent as $episode) : ?>

    <div class="panel panel-info">
        <div class="panel-heading"><strong><?= $episode->titre; ?></strong></div>
        <?= $episode->extrait; ?>
    </div>

<?php endforeach; ?>
