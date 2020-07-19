
// Cambiar CSS

$(function(){
    'use strict';
    
    $('.logo img').on('click', function(){
        $(this).animate({'width': '500px'}, 1000);
    });

    $('main article img').on('mouseenter', aumentarImagen);
    $('main article img').on('mouseleave', disminuirImagen);

    function aumentarImagen(){
        $(this).animate({'width': '350px'}, 1000);
    }

    function disminuirImagen(){
        $(this).animate({'width': '300px'}, 1000);
    }
   
    /*$('.logo img').on('click', function() {
      $(this).animate({'width': '200px'}, 1000); 
   });
    
    
   $('main article img').on('mouseenter', aumentarImagen);
   $('main article img').on('mouseleave', disminuirImagen);
    
    function aumentarImagen() {
        $(this).animate({'width': '100%'});
    }
    function disminuirImagen() {
        $(this).animate({'width': '350px'});
    }
    */
});