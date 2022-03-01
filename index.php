<?php

   $nombre = "Seleccione entre Ingles y Español";
   echo "<h1>Cambio de idioma</h1>" .$nombre;

  //esto es un comentario corto
  /* esto 
  es
  un comentario
  largo
  $numero=10;
  echo "<h1>Programacion Computacional IV SMIS917920 </h1>" . $numero;
  */
  //la palabra echo es una palabra clave propia de php para imprimir

  //evaluar el boton de cambio
  if(isset($_POST['seleccion'])){
      echo "Clic sobre el boton";
      $idioma = $_POST['idioma'];
      echo "<br>" .$idioma;
      INCLUDE $idioma. ".php";
    }else{
      echo "No se a enviado clic";
      INCLUDE "es.php";
    }
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title><?php echo TITLE; ?></title>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand">Navbar</a>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <form method="POST">
            <select name="idioma">
                <option value="es">Spanish</option>
                <option value="en">English</option>
            </select>
            <input type="submit" name="seleccion" value="Cambiar" />
        </form>
        <h1><?php echo TITLE; ?></h1>
        <h1><?php echo HEADING_TITLE; ?></h1>
        <h2><?php echo OVERVIEW_TITLE; ?></h2>
    </body>
</html>
