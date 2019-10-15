<?php

$CheckearNombre=$_GET['nombre'];
$CheckearClave=$_GET['clave'];

$archivo=fopen('usuarios.txt', 'r');

    while(!feof($archivo)) 
    {
		$objeto=json_decode(fgets($archivo));
  		if ($CheckearNombre==$objeto->nombre &&  /*Este if es para checkearSiEstaEl usuario en usuarios.txt */
  			$CheckearClave==$objeto->clave)
  		{
  			header ("Location:ok.php"); /*si esta lo redirecciona a la pagina ok.php*/
  			fclose($archivo);
  			exit();
  		}
	    else 
	    {
	    	header("Location: no.php");
	    	fclose($archivo);
	    	exit();
	    }
	 }
	fclose($archivo);

?> 