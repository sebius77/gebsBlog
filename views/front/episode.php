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

<h2>Commentaires</h2>

<?php
$form = new \Core\HTML\BootstrapForm();
?>

<form method="post">
    <?= $form->input('auteur','Auteur'); ?>
    <?= $form->input('contenu','', ['type' => 'textarea']); ?>
    <input type="hidden" name="idEpisode" value="<?= $episode->id; ?>">
    <button class="btn btn-success">Envoyer</button>
</form>

<p>
<?php foreach($app->getTable('commentaire')->getLastById($_GET['id']) as $commentaire) : ?>

        <div  class="panel panel-default">
            <div class="panel-heading"><strong>
                    <?= $commentaire->auteur . " "; ?></strong>
                    <?=$commentaire->date . "    "; ?>
                    <a href="#">répondre</a>
                    <a href="#">signaler</a>
            </div>
            <div class="panel-body"><?= $commentaire->contenu; ?></div>
        </div>

<?php endforeach; ?>
</p>