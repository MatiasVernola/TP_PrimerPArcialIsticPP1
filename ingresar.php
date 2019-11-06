<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Baja un Cambio S.A</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Estacionamiento</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
            <li class="nav-item">
            
              <em><a class="nav-link" href="tarifas.php">Nuestras tarifas </a></em>
            
            </li>

       </nav>     
                
      </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <br><br>
     <h1>¡Excelente!, ya tiene su usuario creado, ahora ingrese la patente de su vehículo</h1>
      <form action="hacerIngreso.php" method="post">
  Patente:<br>
  <input type="text" name="patente" value="" method="post">
  <br>
  Tipo de vehículo:<br>
  <select >
     <option value="auto"> Auto </option>
     <option value="camioneta"> Camioneta </option>
     <option value="moto"> Moto</option>
   </select>
  
  <br><br>

  <input type="submit" value="Ingresar"> 

  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>