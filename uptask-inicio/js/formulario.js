eventListeners();

function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}

function validarRegistro(e){
    e.preventDefault();

    var usuario = document.querySelector('#usuario').value,
        password = document.querySelector('#password').value,
        tipo = document.querySelector('#tipo').value;

    if (usuario === '' || password === ''){
        // Validación incorrecta, manda mensaje de error
        Swal.fire({
        type: 'error',
        title: 'Error!',
        text: 'Usuario o contraseña no pueden estar vacios!'
        })
    } else {
        // Validación correcta, mandar a ejecutar Ajax
        // Crear los datos que se enviarán al servidor
        var datos = new FormData();
        datos.append('usuario', usuario);
        datos.append('password', password);
        datos.append('accion', tipo);

        // Crear el llamado a Ajax
        var xhr = new XMLHttpRequest();

        // Abrir la conexión
        xhr.open('POST', 'inc/modelos/modelo-admin.php', true);
        
        // Cargar los datos 
        xhr.onload = function() {
            if (this.status === 200){
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta == 'correcto'){
                    Swal.fire({
                    type: 'success',
                    title: 'Usuario creado!',
                    text: 'El usuario fue creado correctamente'
                    })
                } else {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Error al tratar de crear el usuario, intente mas tarde'
                    })
                }
            } else 
                console.log('Status conexion != 200');
        } 

        // Enviar los datos
        xhr.send(datos);
    }
}