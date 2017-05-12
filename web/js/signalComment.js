
jQuery(document).ready(function($) {


    $('input[type="submit"]').click(function (e) {

        e.preventDefault();


        var idComment = $(this).attr('id');

        //alert(idComment);

        var signalForm = new FormData();
        signalForm.append("idComment",idComment);

        //console.log(signalForm);


        ajaxPost('http://localhost/~sgaudin/gebsBlog/web/index.php?page=commentaire.signale', signalForm,
            function (reponse) {

                if(reponse) {
                    $('#reponseSignal').show();
                }


            },false
        );


    })





});