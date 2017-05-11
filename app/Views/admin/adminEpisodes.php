<h1 class="text-center">Administrer les épisodes</h1>
<p>
    <a class="btn btn-primary" href="?page=episode.add">Ajouter</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($app->getTable('episode')->all() as $episode) : ?>
        <tr>
            <td><?= $episode->id; ?></td>
            <td><?= $episode->titre ?></td>
            <td>
                <a class="btn btn-primary" href="?page=episode.edit&id=<?= $episode->id; ?>">Editer</a>
                <form action="?page=episode.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $episode->id; ?>">
                    <button type="submit" class="btn btn-danger" href="?page=episode.delete&id=<?= $episode->id; ?>">Supprimer</button>
                </form>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>