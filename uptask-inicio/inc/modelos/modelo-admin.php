<?php
    
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$accion = $_POST['accion'];

// Se crea un nuevo admin en la bd
if ($accion === 'crear'){
    // Hash de pwd
    $opciones = array('cost' => 12);
    
    // Variable para guardar el hash
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    // importar la conexion 
    include_once '../funciones/conexion.php';

    try {
        $stmt = $conn->prepare('INSERT INTO usuarios (usuario, password) VALUES (?, ?)');
        $stmt->bind_param("ss", $usuario, $hash_password);
        $stmt->execute();
        if ($stmt->affected_rows)
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion
            );
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
} 
// Se logean los administradores
if ($accion === 'login'){

}
?>