<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
      <?php $resultado = $_POST;
        $nombre = $resultado['nombre'];
        $apellido = $resultado['apellido'];

        // Forma de validar estricta
        if (! (filter_has_var(INPUT_POST, 'nombre') && 
                strlen(filter_input(INPUT_POST, 'nombre')) > 0 )){
          echo "El nombre es obligatorio" . '<br>';
        } else{ ?>
          <p> Nombre:  <?php echo $nombre; ?></p>
        <?php } 
          //Forma de validar menos estricta 
          //isset deterima si una variable no es null y existe
          //trim elimina los espacios en blanco de una variable
          if (!isset($apellido) || trim($apellido) != ''){ ?>
            <p> Apellido: <?php echo $apellido; ?></p> <?php
          }else {
            echo "El apellido es obligatorio";
          } ?>
          
        <hr>
        
        <?php
          // Validar un solo Checkbox
          if (isset($_POST['notificaciones'])){
            $notificaciones = $_POST['notificaciones'];
            if ($notificaciones == 'on')
              echo "Notificaciones: " . $notificaciones;
          }

          // Validar varios checkboxes en un array
          if (isset($_POST['curso'])){
            $cursos = $_POST['curso'];
            echo "Tus cursos son: </br>";
            foreach ($cursos as $curso) {
              echo $curso . '</br>';
            }
          }else{
            echo "No escogiste ningun curso";
          }
        ?>
        <hr>
        <?php
          // Validar un Select
          if (isset($_POST['area'])){
            $area = $_POST['area'];
            echo "<h2>Area de especialización</h2>";
            $area = "fe";
            switch ($area) {
              case 'fe':
                echo "Front End"; 
                break;
              case 'be': 
                echo "Back end";
                break;
              case 'fs': 
                echo "Full Stack";
                break;
              default:
                echo "No escogiste un area";
                break;
            }
          }

          // Validar radio button
          $opciones = array(
            'pres' => 'Presencial',
            'online' => 'En línea'
          ); 
        ?>
        <h2>Tipo de curso elegido</h2>
        <?php 
          if (array_key_exists($_POST['opciones'], $opciones)){
            $curso = $_POST['opciones'];
            switch ($curso) {
              case 'pres':
                echo "Presencial";
                break;
              case 'online':
                echo "En linea";
                break;
            }
          }else{
            echo "No escogiste top de curso";
          }
        ?> 
        <h2>Mensaje</h2>
        <?php
          // Validar textos de area
          if (isset($_POST['mensaje'])){
            $mensaje = $_POST['mensaje'];
            $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
            if (strlen($nuevo_mensaje) > 0 && trim($nuevo_mensaje))
              echo $nuevo_mensaje;
            else
              echo "El mensaje esta vacio";
          }
        ?>
          
  </body>
</html>
