<?php
switch($_GET['opcion']){
     case 'modificar':
         header("refresh: 3;url=modificar.php?id=".$_GET['id']);
         break;
     case 'borrar':
         header("refresh: 3;url=borrar.php?id=".$_GET['id']);
         break;
     case 'alta':
         header("refresh: 3;url=alta.php");
         break;
 }
 ?>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Julio Antonio Ramos Gago" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Opciones</title>
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body>
    <header>
      <p>Gestor de Empleados</p>
    </header>
    <nav>
      <p>Menú Horizontal</p>
    </nav>
    <main>
      <aside>
        <p>Menú Vertical</p>
      </aside>
      <article>
        <a href="alta.php">Dar de Alta</a>
        <a href="visualizar.php">Lista de Empleados</a>
      </article>
    </main>
    <footer>
      <p>Footer</p>
    </footer>
  </body>
</html>
