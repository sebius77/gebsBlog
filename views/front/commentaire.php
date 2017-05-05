<div class="panel panel-default" id="comment-<?= $commentaire->id; ?>">
    <div class="panel-heading"><strong>
            <?= $commentaire->auteur . " "; ?></strong>
        <?=$commentaire->date . "    "; ?>
        <p class="text-right">
            <button class="btn btn-default reply" data-id="<?= $commentaire->id; ?>">Répondre</button>
            <button class="btn btn-default">Signaler</button>
        </p>
    </div>
    <div class="panel-body"><?= $commentaire->contenu; ?></div>
</div>


<div style="margin-left: 50px; background: red;">
    <?php if(!is_null($commentaire->getChildren())) : ?>
        <?php foreach($commentaire->children as $commentaire) : ?>
            <?php require 'commentaire.php'; ?>
        <?php endforeach; ?>
    <?php endif ?>

</div>