<h1 class="text-center">Administrer les commentaires</h1>

<table class="table">
    <thead>
    <tr>
        <td>Auteur</td>
        <td>Date</td>
        <td>Contenu</td>
        <td class="pull-right">Action</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($comments as $commentaire) : ?>
        <tr>
            <td><?= $commentaire->auteur; ?></td>
            <td><?= $commentaire->date ?></td>
            <td><?= $commentaire->contenu; ?></td>
            <td class="pull-right">
                <form action="?page=commentaire.valider" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $commentaire->id; ?>">
                    <button type="submit" class="btn btn-success">Valider</button>
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
<br/>