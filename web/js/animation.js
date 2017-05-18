jQuery(document).ready(function($){


    // Lorsque l'on survole un des lien
    $('#panel-img-1').mouseover(function(){
        $(this).fadeTo("slow", 0.4);
        $('#panel-span-1').fadeIn(2000);
    });

    $('#panel-img-1').mouseout(function(){
        $('#panel-span-1').fadeOut(2000);
        $(this).fadeTo("slow", 1);
    });


    // Lorsque l'on survole un des lien
    $('#panel-img-2').mouseover(function(){
        $(this).fadeTo("slow", 0.4);
        $('#panel-span-2').fadeIn(2000);
    });

    $('#panel-img-2').mouseout(function(){
        $('#panel-span-2').fadeOut(2000);
        $(this).fadeTo("slow", 1);
    });

    // Lorsque l'on survole un des lien
    $('#panel-img-3').mouseover(function(){
        $(this).fadeTo("slow", 0.4);
        $('#panel-span-3').fadeIn(2000);
    });

    $('#panel-img-3').mouseout(function(){
        $('#panel-span-3').fadeOut(2000);
        $(this).fadeTo("slow", 1);
    });

});