<!DOCTYPE html>
<!--Julio Antonio Ramos Gago-->
<?php
  require 'configbd.php'; //Acceso a la base de datos.
  $conectar = new mysqli(HOSTNAME, USERNAME, PW, DB);
?>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Julio Antonio Ramos Gago" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listar Empleados</title>
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body>
    <header>
      <p>Listado de Empleados</p>
    </header>
    <nav>
      <p>Menú Horizontal</p>
    </nav>
    <main>
      <aside>
        <p>Menú Vertical</p>
      </aside>
      <article>
        <form action="consultar.php" method="post">
          <label for="dni">DNI</label><br />
          <input type="text" name="dni" id="dni"/><br />
          <select name="filtrado" id="filtrado">
            <option value="ASC">Nombre (A-Z)</option>
            <option value="DESC">Nombre (Z-A)</option>
          </select><br />
          <input type="submit" value="Mostrar"><br /><!--Búsqueda-->
        </form>
        <!--Volver a la página de inicio-->
        <a href="index.html">Volver</a>
        <?php
          //Busqueda de empleados según su filtrado
          if($_POST){
            if(trim($_POST['dni'])=="")
              $consulta="SELECT * FROM empleados ORDER BY nombre ".$_POST['filtrado'].";";
            else
              $consulta="SELECT * FROM empleados WHERE dni LIKE '".$_POST['dni']."%' ORDER BY nombre ".$_POST['filtrado'].";";
            $resultado=$conectar->query($consulta);
            echo '<table>';
            while($fila=$resultado->fetch_assoc()){
              echo '<p> DNI: '.$fila['dni'].' -> Nombre: '.$fila['nombre'].'</p>';
              echo '<p><a href="borrar.php?id='.$fila['idEmpleado'].'">Borrar</a></p>';//Opción de borrar empleado
              echo '<p><a href="modificar.php?id='.$fila['idEmpleado'].'">Modificar</a></p>';//Opción de modificar empleado
            }
          }
        ?>
      </article>
    </main>
    <footer>
      <p>Footer</p>
    </footer>
  </body>
</html>
