<?php
$episodeTable = $app->getTable('episode');

if(!empty($_POST)) {
    $resultat =$episodeTable->update($_GET['id'], [
            'titre' => $_POST['titre'],
            'contenu' => $_POST['contenu']
        ]);

    if($resultat) {
        ?>
        <div class="alert alert-success">L'article a bien été mis à jour.</div>
        <?php
    }

}


$episode = $episodeTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($episode);

?>


<form method="post">
    <?= $form->input('titre', 'Titre'); ?>
    <?= $form->input('contenu', 'Episode', ['type' => 'textarea']); ?>


    <button class="btn btn-primary">Sauvegarder</button>
</form>
