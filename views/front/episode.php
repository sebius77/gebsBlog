<?php
$episode = $app->getTable('episode')->find($_GET['id']);

$commentaireTable = $app->getTable('commentaire');

if(!empty($_POST)) {
    $commentaireTable->add($id, [
            'auteur' => $_POST['auteur'],
            'contenu' => $_POST['contenu']
    ]);
}

?>

<h1><?= $episode->titre; ?></h1>

<p>
    <?= $episode->contenu; ?>
</p>

<h2>Commentaires</h2>

<?php
$form = new \Core\HTML\BootstrapForm();
?>

<form method="post">
    <?= $form->input('auteur','Auteur'); ?>
    <?= $form->input('contenu','', ['type' => 'textarea']); ?>
    <button class="btn btn-success">Envoyer</button>
</form>

<?php foreach($app->getTable('commentaire')->getLastById($_GET['id']) as $commentaire) : ?>


        <h3><?= $commentaire->auteur . " " . $commentaire->date; ?></h3>
        <p><?= $commentaire->contenu; ?></p>

<?php endforeach; ?>
