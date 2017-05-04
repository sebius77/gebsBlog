<div class="panel panel-default">
    <div class="panel-heading"><strong>
            <?= $commentaire->auteur . " "; ?></strong>
        <?=$commentaire->date . "    "; ?>
        <a href="#">répondre</a>
        <a href="#">signaler</a>
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