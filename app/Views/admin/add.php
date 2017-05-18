<?php if($success): ?>
        <div class="alert alert-success">L'épisode a bien été ajouté.</div>
<?php endif; ?>

<form method="post">
    <?= $form->input('titre', 'Titre'); ?>
    <?= $form->input('contenu', 'Episode', ['type' => 'textarea']); ?>


    <button class="btn btn-primary">Ajouter</button>
</form>
<br/>
