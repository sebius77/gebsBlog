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
    <link href="css/style.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="lib/tinymce/tinymce.min.js"></script>
</head>

<body>

<!-- HEADER DE LA PAGE -->

<div class="container">
    <div class="row">
        <div class="col-md-6 entete">
            <img src="img/passeport.jpg" alt="Logo du site" width="70px" height="70px">
            <h1>Billet pour l'Alaska</h1>
        </div>
        <div class="col-md-6">
            <p class="text-right" id="connect">
                <a href="admin.php?page=adminCommentaires" class="glyphicon glyphicon-bell">
                    <span class="badge badge-notify"><?= $commentSignal; ?></span></a>
                <a href="admin.php?page=disconnect">Se déconnecter </a>
            </p>
        </div>

    </div>

</div>

<!-- Caroussel -->

<div id="monCaroussel" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#monCarousel" data-slide-to="1"></li>
        <li data-target="#monCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/alaska.png" alt="Alaska">
            <div class="carousel-caption">
                <h3>Un billet pour l'alaska</h3>
            </div>
        </div>
        <div class="item">
            <img src="img/alaska2.png" alt="Alaska">
            <div class="carousel-caption">
                <h3>À suivre sur ce site</h3>
            </div>
        </div>
        <div class="item">
            <img src="img/alaska3.jpg" alt="Alaska">
            <div class="carousel-caption">
                <h3>En plusieurs épisodes</h3>
            </div>
        </div>
        <a class="left carousel-control" href="#monCaroussel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#monCaroussel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>


<!-- Barre de navigation -->

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="admin.php?page=accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                <li><a href="admin.php?page=livre"><span class="glyphicon glyphicon-book"></span> Le livre</a></li>
                <li><a href="admin.php?page=biographie"><span class="glyphicon glyphicon-leaf"></span> Biographie</a></li>
                <li><a href="admin.php?page=bibliographie"><span class="glyphicon glyphicon-list-alt"></span> Bibliographie</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown"><span class="glyphicon glyphicon-cog dropdown"></span> Administration <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="admin.php?page=adminEpisodes">Épisodes</a></li>
                        <li><a href="admin.php?page=adminCommentaires">Commentaires</a></li>

                    </ul>
                </li>

        </div>
    </div>
</nav>

<!-- CORPS DE PAGE -->

<div class="container">
    <?= $content; ?>
</div>



<!-- FOOTER -->
<footer class="row text-center" id="footer">
    <h2>© Jean Forteroche</h2>
    <a href="#" class="fa fa-3x fa-facebook-official" aria-hidden="true" name="fb_share" type="box_count" ></a>
    <a href="http://twitter.com/share" class="fa fa-3x fa-twitter-square" aria-hidden="true"></a>
    <a ></a>
    <br/>
    <br/>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/ajaxPost.js"></script>
<script src="js/signalComment.js"></script>
<script src="js/commentResponse.js"></script>
<script src="js/displayButton.js"></script>
<script src="js/pagination.js"></script>

</body>
</html>