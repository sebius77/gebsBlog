<?php
// Récupération d'un épisode en fonction de l'id
$episode = $app->getTable('episode')->find($_GET['id']);

//
$commentaireTable = $app->getTable('commentaire');

if(isset($_POST) && !empty($_POST)) {
    $resultat = $commentaireTable->add([
            'auteur' => $_POST['auteur'],
            'contenu' => $_POST['contenu'],
            'idEpisode' => $_POST['idEpisode'],
            'parent_id' => $_POST['parent_id'],
            'niveau' => $_POST['parent_level']
    ]);

    if ($resultat) {
        ?>
        <div class="alert alert-success">Votre commentaire a bien été ajouté</div>
        <?php
    }
}

?>

<h1><?= $episode->titre; ?></h1>

<p>
    <?= $episode->contenu; ?>
</p>

<div class="row">
   <ul class="pagination pull-right">
       <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
       <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
   </ul>
</div>

<h2>Commentaires</h2>

<?php
$form = new \Core\HTML\BootstrapForm();
?>

<p>
    <?php foreach($app->getTable('commentaire')->findAllChildren($_GET['id']) as $commentaire) : ?>

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

