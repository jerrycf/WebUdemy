console.log("Started");
(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){
    //getElementById
    /*var logo = document.getElementById('logo');
    var navegacion = document.getElementById('navegacion');
    console.log(navegacion);
    navegacion.style.display = 'none';*/

    //getElementsByClassName
    /*var navegacion = document.getElementsByClassName('navegacion');
    console.log(navegacion[0]);

    var contenido = document.getElementsByClassName('contenido');
    console.log(contenido);
    contenido[0].style.display = 'none';
    */

    //getElementsByTagName
    /*var enlaces = document.getElementsByTagName('a');
    console.log(enlaces);
    
    for (var i = 0; i < enlaces.length; i++)
      enlaces[i].setAttribute('target', '_blank');

    var enlacesSideBar = document.getElementById('sidebar').getElementsByTagName('a');
    for (var i = 0; i < enlacesSideBar.length; i++)
      enlacesSideBar[i].setAttribute('href', 'http://www.google.com');
    */

    //QuerySelector
    /*var logo = document.querySelector('#logo');
    console.log(logo);
    var encabezado = document.querySelectorAll('h2, footer p');
    console.log(encabezado);
    */
    //QuerySelectorAll
    /*
    var enlaces = document.querySelectorAll('#menu ul li a')[0];
    console.log(enlaces.nodeType);
    console.log(enlaces.nodeName);
    console.log(enlaces.attributes);
    console.log(enlaces.firstChild);
    console.log(enlaces.firstChild.nodeValue);
    enlaces.firstChild.nodeValue = "HOME";
    */

    //Crear contenido
    /*
    var sidebar = document.querySelector('#sidebar');
    console.log(sidebar);
    var nuevoElemento = document.createElement('H1');
    var nuevoTexto = document.createTextNode('Hola mundo');
    nuevoElemento.appendChild(nuevoTexto);
    sidebar.appendChild(nuevoElemento);

    //Agregar entrada 6 al sidebar
    var enlacesSideBar = document.querySelectorAll('#sidebar ul');
    //Creando el enlace
    var nuevoEnlace = document.createElement('A');
    nuevoEnlace.setAttribute('href', '#');
    var textoEnlace = document.createTextNode('Entrada 6');
    nuevoEnlace.appendChild(textoEnlace);
    //Creando la lista
    var nuevaLista = document.createElement('LI');
    nuevaLista.appendChild(nuevoEnlace);
    //Lo agregamos al menu
    enlacesSideBar[0].appendChild(nuevaLista);
    */

    //Clonando un nodo
    /*var contenido = document.querySelectorAll('main');
    var nuevoContenido = contenido[0].cloneNode(true);
    var sideBar = document.querySelector('aside');
    sideBar.insertBefore(nuevoContenido, sideBar.childNodes[5]);
    */
   
    //Inserciones con insertBefore
    /*var sidebar = document.querySelector('aside');
    var masVisitados = document.createElement('H2');
    var textoVisitados = document.createTextNode('Posts mas visitados');
    masVisitados.appendChild(textoVisitados);
    sidebar.insertBefore(masVisitados, sidebar.childNodes[0]);

    var contenido = document.querySelectorAll('main h2');
    for (var i = 0; i < contenido.length; i++){
      var nuevoElemento = document.createElement('LI');
      var nuevoTexto = document.createTextNode(contenido[i].firstChild.nodeValue);
      nuevoElemento.appendChild(nuevoTexto);
      sidebar.insertBefore(nuevoElemento, sidebar.childNodes[1]);
    }
    */
    
    //Eliminando nodos
    /*
    var primerPost = document.querySelector('main article');
    primerPost.parentNode.removeChild(primerPost);

    var enlace = document.querySelector('#navegacion nav ul li a');
    enlace.parentNode.removeChild(enlace);
    */

    //Reemplazar nodos
    var viejoNodo = document.querySelector('main h2');
    var nuevoNodo = document.querySelector('footer h2');
    viejoNodo.parentNode.replaceChild(nuevoNodo, viejoNodo);

    var nuevoTitulo = document.createElement('H2');
    var nuevoTexto = document.createTextNode('Hola mundo');
    nuevoTitulo.appendChild(nuevoTexto);

    var viejoNodo = document.querySelector('main h2');
    viejoNodo.parentNode.replaceChild(nuevoTitulo, viejoNodo);
    




  })
})();


console.log("Finish loading html");