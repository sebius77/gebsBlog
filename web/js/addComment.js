jQuery(document).ready(function($) {


    $('#submitComment').click(function (e) {
        e.preventDefault();

        var auteur = $('input[name="auteur"]').val();
        var contenu = $('textarea[name="contenu"]').val();
        var parent_id = $('input[name="parent_id"]').val();
        var parent_level = $('input[name="parent_level"]').val();
        var idEpisode = $('input[name="idEpisode"]').val();

        /*
        console.log(auteur);
        console.log(contenu);
        console.log(parent_id);
        console.log(parent_level);
        console.log(idEpisode);
        */

        var data = new FormData();
        data.append("auteur",auteur);
        data.append("contenu",contenu);
        data.append("niveau",parent_level);
        data.append("parent_id", parent_id);
        data.append("idEpisode", idEpisode);

        ajaxPost('http://localhost/~sgaudin/gebsBlog/web/?page=commentaire.add', data,
            function (reponse) {
                if(reponse === true) {
                    //console.log(reponse);
                    console.log('ajout réussi');

                } else {
                    console.log('erreur d\'ajout');
                }


            },false
        );


    });
});