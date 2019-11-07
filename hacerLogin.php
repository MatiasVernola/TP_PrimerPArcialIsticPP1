<?php
session_start();

$CheckearNombre=$_GET['nombre'];
$CheckearClave=$_GET['clave'];

$archivo=fopen('usuarios.txt', 'r');

    while(!feof($archivo)) 
    {
		$objeto=json_decode(fgets($archivo));/*Este if es para checkearSiEstaEl usuario en usuarios.txt */
     var_dump($objeto);
     echo "<br>";

  		if ($CheckearNombre==$objeto->nombre &&  			$CheckearClave==$objeto->clave)
  		{
  			$_SESSION['nombre']=$_GET['nombre'];
  			header ("Location:ok.php"); /*si esta lo redirecciona a la pagina ok.php*/
  			fclose($archivo);
  			exit();
  	   }
    }
	    
	    
	    
header("Location: no.php");
fclose($archivo);
exit();

?> 