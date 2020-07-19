
// Ajax

$(function(){
    'use strict';
    
    $('.logo img').click(cargarAjax);

    function cargarAjax() {
        $.ajax('js_13/lenguajes.txt', {
            success: agregarContenido,
            type:'GET', 
            datatype:'text'
        });
    }

    function agregarContenido(data, status, jqxhr){
        $('aside').text(data);
        console.log(status);
    }
    
    $('aside').load('js_13/promo.html');

    /*
  $('.logo img').on('click', cargarAjax);
    
    function cargarAjax() {
        $.ajax("js_13/lenguajes.txt", {
            success: agregarContenido,
            type:"GET",
            dataType:'text'
        });
    }
    function agregarContenido(data, status, jqxhr){
        $('aside').text(data);
        console.log(status);
    }
    
    
    $('aside.sidebar').load('js_13/promo.html');
    */
});