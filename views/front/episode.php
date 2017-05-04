<?php
$episode = $app->getTable('episode')->find($_GET['id']);
$commentaireTable = $app->getTable('commentaire');

if(!empty($_POST)) {
    $resultat =$commentaireTable->add([
            'auteur' => $_POST['auteur'],
            'contenu' => $_POST['contenu'],
            'idEpisode' => $_POST['idEpisode']
    ]);
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

<form method="post" id="reponse">
    <?= $form->input('auteur','Auteur'); ?>
    <?= $form->input('contenu','', ['type' => 'textarea']); ?>
    <input type="hidden" name="idEpisode" value="<?= $episode->id; ?>">
    <button class="btn btn-success">Envoyer</button>
</form>

<p>
    <?php foreach($app->getTable('commentaire')->findAllChildren($_GET['id']) as $commentaire) : ?>

        <?php require 'commentaire.php'; ?>

    <?php endforeach; ?>
</p>