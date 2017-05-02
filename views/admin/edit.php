<?php
$episode = App\Table\Episode::find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($episode);

if(!empty($_POST)) {
    $episode->update($_GET['id'],
        $_POST['titre'],
        $_POST['contenu']);
}


?>


<form method="post">
    <?= $form->input('titre', 'Titre'); ?>
    <?= $form->input('contenu', 'Episode', ['type' => 'textarea']); ?>


    <button class="btn btn-primary">Sauvegarder</button>
</form>
