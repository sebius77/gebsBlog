<!-- Affichage d'un commentaire et ses enfants -->

<div class="panel panel-default" id="comment-<?= $commentaire->id; ?>">
        <div class="panel-heading"><strong>
                <?= $commentaire->auteur . " "; ?></strong>
            <?=$commentaire->date . "    "; ?>


            <div class="btn-group pull-right" style="display: flex;">

                <button class="btn btn-default btn-xs reply" data-id="<?= $commentaire->id; ?>"
                        data-level="<?= $commentaire->niveau; ?>">Répondre</button>

            <form>
                <input type="hidden" id="idComSign" name="idComment" value="<?= $commentaire->id; ?>">
                <input type="hidden" id="idEpiSign" name="idEpisode" value="<?= $episode->id; ?>">
                <input type="submit" id="signalComment" class="btn btn-default btn-xs" value="Signaler">
            </form>

            </div>


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