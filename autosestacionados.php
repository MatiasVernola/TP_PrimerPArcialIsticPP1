<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Baja un cambio S.A</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <em><a class="navbar-brand" href="index.php">Baja un cmbio S.A</a></em>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="registro.php">Registrarse<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar Sesión</a>
            </li>
            
                      
            <li class="nav-item active">
              <a class="nav-link" href="facturar.php">Facturar <span class="sr-only">(current)</span></a>
            </li>

             <li class="nav-item active">
              <a class="nav-link" href="facturados.php">Vehículos facturados<span class="sr-only">(current)</span></a>
            </li>
           
          </ul>
        </div>
      </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="container">
      <h1>Vehiculos estacionados</h1>

    <?php
    error_reporting(0); //esto es para que no me muestre errores
  $miArchivo = fopen("ingresados.txt", "r") ;
  while(!feof($miArchivo)) {
    $objeto=json_decode(fgets($miArchivo));
      

      
          echo "<li>";
          echo "Patente: ".$objeto->patente."-Hora Ingreso: ".date("d-m-Y h:i:sa",$objeto->horaIngreso);
          echo "</li>";
        
      
  }
  fclose($miArchivo);
?> 
  
    </main>
    <img src="est.jpg"height="400">
    <footer class="footer">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>
  </body>
</html>