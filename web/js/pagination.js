jQuery(document).ready(function($) {

    // gestion lors du clique des boutons du sommaires
    $('.page-item').click(function (e) {

        // Pour ne pas recharger la page au clic
        e.preventDefault();

        // On récupère la page courante
        var pageCourante = Number($('#pageSommaire').attr('title'));

        // On récupère le nombre total de page
        var nbrePage = $('#pageSommaire').attr('nbrePage');

        // On récupère le bouton précédent
        var precedent = $('#pagePrev');

        // On récupère le bouton suivant
        var suivant = $('#pageNext');

        // Variable pour afficher les résultats
        var dataValid = false;

        // On récupére la page cliquée
        var idPage = $(this).attr('id');
        if ((idPage !== 'pagePrev') || (idPage !== 'pageNext')) {
            var numeroPage = idPage.split("-");
            numeroPage = numeroPage[1];
            dataValid = true;
            $('#pageSommaire').attr('title',numeroPage);
        }

        if (idPage === 'pagePrev') {
            // Cas ou le bouton cliqué est "précédent"
            // Il faut traiter le cas ou la page actuelle serait la page 1 et donc pas de page précédente

            numeroPage = pageCourante - 1;

            if(pageCourante === 1) {
                // Si la page courante est la première, on désactive le bouton
                dataValid = false;
            } else if (pageCourante > 1) {

                $('#pageSommaire').attr('title',numeroPage);
                dataValid = true;
            }
        }

        if (idPage === 'pageNext') {
            // Cas ou le bouton cliqué est "suivant"
            // Il faut traiter le cas ou la page serait la dernière page et donc pas de page suivante
            numeroPage = pageCourante + 1;

            if(pageCourante === nbrePage) {
                // Si la page courante est la dernière page, on désactive le bouton suivant
                dataValid = false;
            } else if (pageCourante < nbrePage){
                $('#pageSommaire').attr('title',numeroPage);
                dataValid = true;
            }
        }

        /* Selon le bouton cliqué dans la pagination
           Nous transmettons la page sélectionné pour récupérer
           les informations dans la base de données grâce à une
           requête Ajax.
         */

            if(dataValid === true) {

                var pageForm = new FormData();
                pageForm.append("numeroPage", numeroPage);

                ajaxPost('http://sg-oc.iut-orsay.fr/?page=choixPage', pageForm,
                    function (reponse) {

                    if(reponse) {

                        var tab = JSON.parse(reponse);
                        var html = "";
                        tab.forEach(function(episode) {
                            html += episode;
                        });

                        $('#pageSommaire').html(html);

                    }

                    }, false
                );
            }

    })
});
