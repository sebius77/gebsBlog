<!-- Affichage de l'épisode et de ses commentaires -->

<h1><?= $episode->titre; ?></h1>

<p class="text-justify">
    <?= $episode->contenu; ?>
</p>

<div class="row">
    <ul class="pagination pull-right">
        <li class="epi-item"><a class="page-link" href="?page=episode&id=<?= $prevEpisode; ?>">Précédent</a></li>
        <li class="epi-item"><a class="page-link" href="?page=episode&id=<?= $nextEpisode; ?>">Suivant</a></li>
    </ul>
</div>

<h2>Commentaires</h2>
<?php if($success === false): ?>
<div class="alert alert-danger">Le champ auteur n'est pas correctement renseigné !!!!</div>
<?php endif; ?>
<?php if($success === true): ?>
    <div class="alert alert-success">Votre commentaire a bien été ajouté !!!</div>
<?php endif; ?>
<div id="reponseSignal"></div>

<!-- Affichage des commentaires et du formulaire -->
<p>
    <?php foreach($commentaires as $commentaire) : ?>
        <?php require 'commentaire.php'; ?>
    <?php endforeach; ?>
</p>

<form method="post" id="form-comment">
    <input type="hidden" name="parent_id" value="0" id="parent_id">
    <input type="hidden" name="parent_level" value="0" id="parent_level">
    <h4>Votre commentaire</h4>
    <?= $form->input('auteur','Auteur'); ?>
    <?= $form->input('contenu','', ['type' => 'textarea']); ?>
    <input type="hidden" name="idEpisode" value="<?= $episode->id; ?>">
    <button type="submit" id="submitComment" class="btn btn-success">Envoyer</button>
</form>
<br/>