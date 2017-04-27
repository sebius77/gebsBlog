<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Billet simple pour l'Alaska</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Les styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../web/css/style.css" rel="stylesheet">
</head>

<body>

<!-- HEADER DE LA PAGE -->

<div class="container" id="entete">
    <img src="img/passeport.jpg" alt="Logo du site" width="70px" height="70px">
    <h1>Billet pour l'Alaska</h1>
</div>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?page=accueil"><span class="glyphicon glyphicon-home"></span> ACCUEIL</a></li>
                <li><a href="index.php?page=livre"><span class="glyphicon glyphicon-book"></span> LE LIVRE</a></li>
                <li><a href="index.php?page=aPropos"><span class="glyphicon glyphicon-info-sign"></span> A PROPOS</a></li>
                <li><a href="index.php?page=login"><span></span>Connexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- CORPS DE PAGE -->

<div class="container">
    <?= $content; ?>
</div>



<!-- FOOTER -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
