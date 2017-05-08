<h1>Administrer les commentaires</h1>

<table class="table">
    <thead>
    <tr>
        <td>Auteur</td>
        <td>Date</td>
        <td>Contenu</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($app->getTable('commentaire')->getSignalComment() as $commentaire) : ?>
        <tr>
            <td><?= $commentaire->auteur; ?></td>
            <td><?= $commentaire->date ?></td>
            <td>
                <form action="?page=commentaire.valider" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $commentaire->id; ?>">
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
                <form action="?page=commentaire.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $commentaire->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>