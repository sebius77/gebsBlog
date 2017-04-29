<?php



$episodes = App\Table\Episode::all();

?>

<h1>Administrer les épisodes</h1>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($episodes as $episode) : ?>
        <tr>
            <td><?= $episode->id; ?></td>
            <td><?= $episode->titre ?></td>
            <td>
                <a class="btn btn-primary" href="?page=episode.edit&id=<?= $episode->id; ?>">Editer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>