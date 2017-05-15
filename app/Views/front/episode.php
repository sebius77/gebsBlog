<!-- Affichage de l'épisode et de ses commentaires -->

<h1><?= $episode->titre; ?></h1>

<p class="text-justify">
    <?= $episode->contenu; ?>
</p>

<div class="row">
   <ul class="pagination pull-right">
       <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
       <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
   </ul>
</div>

<h2>Commentaires</h2>

<!-- Message de succès lorsqu'une réponse a été effectuée -->
<div id="reponseSignal" class="alert alert-success" style="display: none;">Le commentaire a été signalé</div>

<?php if($success): ?>
    <div class="alert alert-success">Le commentaire a bien été ajouté</div>
<?php endif; ?>



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
    <button class="btn btn-success">Envoyer</button>
</form>
<br/>
