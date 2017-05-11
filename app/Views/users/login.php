<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects.
    </div>
<?php endif; ?>

<form method="post">
    <?= $form->input('username', 'Identifiant'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <br/>

        <button class="btn btn-primary">Envoyez</button>

</form>
<br/>