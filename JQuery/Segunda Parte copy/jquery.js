$(function(){
    'use strict'

    console.log('jquery file upload');

    $('.nuestros-servicios div:first').show();
    $('.servicios nav a:first').addClass('activo');

    $('.servicios nav a').click(mostrarTabs);


    function mostrarTabs() {
        $('.servicios nav a').removeClass('activo');
        $(this).addClass('activo');
        var enlace = $(this).attr('href');
        console.log(enlace);
        $('.nuestros-servicios div').fadeOut();
        $(enlace).fadeIn();

        return false;
    }
});