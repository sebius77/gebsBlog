<?php
$episodeTable = $app->getTable('episode');

if(!empty($_POST)) {
    $resultat =$episodeTable->add([
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu']
    ]);

    if($resultat) {
        ?>
        <div class="alert alert-success">L'article a bien été ajouté.</div>

        <?php
    }

}

$form = new \Core\HTML\BootstrapForm();

?>


<form method="post">
    <?= $form->input('titre', 'Titre'); ?>
    <?= $form->input('contenu', 'Episode', ['type' => 'textarea']); ?>


    <button class="btn btn-primary">Ajouter</button>
</form>
