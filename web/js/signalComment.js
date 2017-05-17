jQuery(document).ready(function($) {


    $('input[type="submit"]').click(function (e) {

        e.preventDefault();


        var idComment = $(this).attr('id');

        //alert(idComment);

        var signalForm = new FormData();
        signalForm.append("idComment",idComment);

        //console.log(signalForm);


        ajaxPost('http://sg-oc.iut-orsay.fr/?page=commentaire.signale', signalForm,
            function (reponse) {

                if(reponse) {
                    $('#reponseSignal').html('<div class="alert alert-success">Le commentaire a été signalé</div>');
                }


            },false
        );


    })

});
