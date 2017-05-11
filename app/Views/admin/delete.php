<?php

$episodeTable = $app->getTable('episode');
if (!empty($_POST)) {
    $result = $episodeTable->delete($_POST['id']);
    header('Location: admin.php');
}