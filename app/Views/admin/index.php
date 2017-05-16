<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default" style="min-height: 400px;">
                <div class="panel-heading">
                    <strong>Présentation</strong>
                </div>
                <p>
                    David avait dû s’asseoir lorsqu’il avait entendu le prénom Florence. Il était devenu blanc un
                    instant. Il allait peut-être perdre Florence avant même de lui avoir avoué son amour.
                    Il devait empêcher Prélude de continuer dans son délire. Mais comment pouvait-il stopper
                    ce parasite créé par lui quelques années auparavant ? Ce n’était pas un adversaire ordinaire.
                    David avait déjà détruit plus d’un virus, mais il s’agissait de virus installés sur des
                    machines isolées. Aujourd’hui, c’est une sorte de virus qui a pris place sur tous les ordinateurs
                    de la planète. Et en plus, ce virus, nommé Prélude, avait un soupçon, non négligeable,
                    d’intelligence.

                    Aujourd’hui, c’est son anniversaire. Il a vingt-six ans, mais il ne s’en souvient plus.
                    Il ne prête pas attention à ce genre de détails. David est un homme distrait, timide,
                    mais sûr de lui. Il est grand et mince. De grandes mains prolongent ses longs bras.
                    Il lui serait possible de tenir deux bouteilles de Champagne dans chacune de ses mains,
                    mais il ne boit jamais. L'alcool le rend malade et malheureux, voir dépressif.

                    Cela ressemblait aux gros ordinateurs que David avait pu voir dans des films de science fiction.
                    Beaucoup de petites lumières indiquaient qu’il était en fonction. À la base, une sorte d’aquarium
                    avait été installé tout autour. Certainement le système de refroidissement car des bulles montaient
                    sans cesse, preuve que l’eau était en ébullition. Soudain, David resta bouche bée.
                    Une voix caverneuse sortie des écrans où venait de s’afficher le mot « Prélude ».
                </p>
            </div>
        </div>
        <div class="col-lg-4">


            <div  class="panel panel-default">
                <div class="panel-heading"><strong>Les derniers épisodes</strong></div>
                <ul class="list-unstyled">
                    <?php foreach($episodes as $item) : ; ?>

                        <li><a href="<?= $item->url; ?>"><?= $item->titre; ?></a>
                            <?= strftime('%d %b %G', strtotime($item->date)); ?></li>

                    <?php endforeach; ?>
                </ul>
            </div>



        </div>
    </div>
    <div class="row">

        <div class="col-md-offset-1 col-md-3">
            <div  class="panel panel-default">
                <div class="panel-heading"><strong>Le livre</strong></div>
                <img src="img/book.jpg" class="img-responsive">

            </div>
        </div>


        <div class="col-md-offset-1 col-md-3">
            <div  class="panel panel-default">
                <div class="panel-heading"><strong>La biographie</strong></div>
                <img src="img/biographie.jpg" class="img-responsive">

            </div>
        </div>
        <div class="col-md-offset-1 col-md-3">
            <div  class="panel panel-default">
                <div class="panel-heading"><strong>La bibliographie</strong></div>
                <img src="img/bibliographie.jpg" class="img-responsive">

            </div>
        </div>
    </div>


</div>
