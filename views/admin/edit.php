<?php
$episode = App\Table\Episode::find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($episode);
?>


<form method="post">
    <?= $form->input('titre', 'Titre'); ?>
    <?= $form->input('contenu', 'Episode', ['type' => 'textarea']); ?>


    <button class="btn btn-primary">Sauvegarder</button>
</form>
