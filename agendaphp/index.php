<?php include 'inc/layout/header.php'; ?>

<div class="contenedor-barra">
     <h1>Agenda de contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
     <form action="#" id="contacto">
          <legend>Añada un contacto <span>todos los campos obligatorios</span></legend>

          <?php include_once 'inc/layout/formulario2.php'; ?>
     </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
     <div class="contenedor-contacos">
          <h2>Contactos</h2>
          <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar un contacto...">
          <p class="total-contactos"><span>2</span> Contactos</p>

          <div class="contenedor-tabla">
               <table id="listado-contactos" class="listado-contactos">
                    <thead>
                         <tr>
                              <th>Nombre</th>
                              <th>Empresa</th>
                              <th>Teléfono</th>
                              <th>Acciones</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td>Gerardo Carrillo</td>
                              <td>IPN</td>
                              <td>9212680369</td>
                              <td>
                                   <a href="editar2.php?id=1" class="btn btn-editar"><i class="fas fa-pen-square"></i></a>
                                   <button data-id="1" type="button" class="btn btn-borrar"><i class="fas fa-trash-alt"></i></button>
                              </td>
                         </tr>
                         <tr>
                              <td>Jerry Grace</td>
                              <td>Microsoft</td>
                              <td>921248712</td>
                              <td>
                                   <a href="editar2.php?id=1" class="btn btn-editar"><i class="fas fa-pen-square"></i></a>
                                   <button data-id="1" type="button" class="btn btn-borrar"><i class="fas fa-trash-alt"></i></button>
                              </td>
                         </tr>
                         <tr>
                              <td>Carlos Hernández</td>
                              <td>Google</td>
                              <td>921536564</td>
                              <td>
                                   <a href="editar2.php?id=1" class="btn btn-editar"><i class="fas fa-pen-square"></i></a>
                                   <button data-id="1" type="button" class="btn btn-borrar"><i class="fas fa-trash-alt"></i></button>
                              </td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </div>
</div>

<?php include 'inc/layout/footer.php'; ?>









<!-- <?php 
     include 'inc/funciones/funciones.php';
     include 'inc/layout/header.php';
?>

<div class="contenedor-barra">
     <h1>Agenda de Contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
     <form id="contacto" action="#">
          <legend>Añada un contacto <span>Todos los campos son obligatorios</span> </legend>

          <?php include 'inc/layout/formulario.php'; ?>
     </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
     <div class="contenedor-contactos">
          <h2>Contactos</h2>

          <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">

          <p class="total-contactos"><span></span> Contactos</p>

          <div class="contenedor-tabla">
               <table id="listado-contactos" class="listado-contactos">
                    <thead>
                         <tr>
                              <th>Nombre</th>
                              <th>Empresa</th>
                              <th>Teléfono</th>
                              <th>Acciones</th>
                         </tr>
                    </thead>

                    <tbody>
                         <?php $contactos = obtenerContactos(); 
                              
                               if($contactos->num_rows) { 
                                    
                                   foreach($contactos as $contacto) { ?>
                                   <tr>
                                        
                                        <td><?php echo $contacto['nombre']; ?></td>
                                        <td><?php echo $contacto['empresa']; ?></td>
                                        <td><?php echo $contacto['telefono']; ?></td>
                                        <td>
                                             <a class="btn-editar btn" href="editar.php?id=<?php echo $contacto['id']; ?>">
                                                  <i class="fas fa-pen-square"></i>
                                             </a>
                                             <button data-id="<?php echo $contacto['id']; ?>" type="button" class="btn-borrar btn">
                                                  <i class="fas fa-trash-alt"></i>
                                             </button>
                                        </td>
                                   </tr>
                                   <?php }
                              } ?>
                         
                    </tbody>
               </table>
          </div>
     </div>
</div>


<?php include 'inc/layout/footer.php'; ?> -->

