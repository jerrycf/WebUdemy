const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners() {
    // Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();
    
    const nombre = document.querySelector('#nombre').value,
          empresa = document.querySelector('#empresa').value,
          telefono = document.querySelector('#telefono').value,
          accion = document.querySelector('#accion').value;

    if (nombre === '' || empresa === '' || telefono === '')
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
    else   {
        // Pasa la validacion, crea llamado a Ajax
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);
        // console.log(...infoContacto);

        if (accion == 'crear'){
            insertarBD(infoContacto);
        }else{

        }
    }
        
}

// Notificación en pantalla
function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    // Mostrar la notificacion antes al principio del form
    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    // Establecer un tiempo para la notificacion
    setTimeout(() => {
        notificacion.classList.add('visible');
        setTimeout(() => {
            notificacion.classList.remove('visible');
            setTimeout(() => {
                notificacion.remove();
            }, 500);
        }, 3000);
    }, 100);
}

// Inserta en la base de datos por medio de Ajax
function insertarBD(datos) {
    // LLamado a Ajax
    
    // Crear el objeto 
    const xhr = new XMLHttpRequest();
    
    // Abrir la conexion 
    xhr.open('POST', 'inc/modelos/modelos-contacto2.php', true);
    
    
    // Pasar los datos
    xhr.onload = function() {
        if (this.status === 200){
            console.log(JSON.parse( xhr.responseText) );
            const respuesta = JSON.parse( xhr.responseText);
            console.log(respuesta.empresa);
        } else {
            alert('Request failed. Returned status of ' + xhr.status);
        }
    }

    // Enviar los datos
     xhr.send(datos);
}