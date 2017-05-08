<!-- Affichage d'un commentaire -->

<div class="panel panel-default" id="comment-<?= $commentaire->id; ?>">
        <div class="panel-heading"><strong>
                <?= $commentaire->auteur . " "; ?></strong>
            <?=$commentaire->date . "    "; ?>

            <p class="text-right">
                <button class="btn btn-default reply" data-id="<?= $commentaire->id; ?>"
                        data-level="<?= $commentaire->niveau; ?>">Répondre</button>
            </p>
            <form action="?page=commentaire.signaler" method="post">
                <input type="hidden" name="id" value="<?= $commentaire->id; ?>">
                <input type="hidden" name="idEpisode" value="<?= $episode->id; ?>">
                <button type="submit" class="btn btn-default">Signaler</button>
            </form>


        </div>
        <div class="panel-body"><?= $commentaire->contenu; ?></div>
</div>


<div style="margin-left: 50px;">
    <?php if(!is_null($commentaire->getChildren())) : ?>
        <?php foreach($commentaire->children as $commentaire) : ?>
            <?php require 'commentaire.php'; ?>
        <?php endforeach; ?>
    <?php endif ?>

</div>