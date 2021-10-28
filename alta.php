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
    <title>Alta de Empleados</title>
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body>
    <header>
      <p>Alta de Empleados</p>
    </header>
    <nav>
      <p>Menú Horizontal</p>
    </nav>
    <main>
      <aside>
        <p>Menú Vertical</p>
      </aside>
      <article>
        <form action="alta.php" method="post">
          <label for="dni">DNI</label><br/>
          <input type="text" name="dni" id="dni"/><br/>
          <label for="nombre">Nombre Completo</label><br/>
          <input type="text" name="nombre" id="nombre"/><br/>
          <label for="correo">Correo Electrónico</label><br/>
          <input type="text" name="correo" id="correo"/><br/>
          <label for="telefono">Teléfono Personal</label><br/>
          <input type="text" name="telefono" id="telefono"/><br/>
          <input type="submit" value="Agregar"/><!--Agregar empleado con una *consulta (insert into).-->
          <input type="reset" value="Borrar Datos"/><br/><!--Limpiar formulario si no queremos realizar la operación.-->
        </form>
        <!--Volver a la página de inicio-->
        <a href="index.html">Volver</a>
        <?php
          //Una vez envia los datos del formulario, se hará un insert into con esos datos.
          //Si estos datos son aceptados mostrará un *mensaje por pantalla de confirmación.
          if($_POST){
            //*consulta
            $consulta="INSERT INTO Empleados (dni, nombre, correo, telefono) VALUES ('".$_POST['dni']."', '".ucwords($_POST['nombre'])."', '".$_POST['correo']."', '".$_POST['telefono']."');";
            $resultado=$conectar->query($consulta);
            echo '<p>Empleado agregado correctamente</p>';//*mensaje
          }
        ?>
      </article>
    </main>
    <footer>
      <p>Footer</p>
    </footer>
  </body>
</html>
