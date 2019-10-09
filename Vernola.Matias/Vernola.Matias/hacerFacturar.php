<?php

$CheckearNombre=$_GET['patente'];
$CheckearClave=$_GET['horaIngreso'];

$archivo=fopen('vehiculos.txt', 'r');

    while(!feof($archivo)) 
    {
		$objeto=json_decode(fgets($archivo));
  		if ($CheckearNombre==$objeto->'patente' &&  /*Este if es para checkearSiEstaEl usuario en usuarios.txt */
  			$CheckearClave==$objeto->'horaIngreso')
  		{
  			header ("Location:facturar.php"); /*si esta lo redirecciona a la pagina ok.php*/
  			fclose($archivo);
  			exit()
  		}
	    else 
	    {
	    	header("Location: no.php");
	    	fclose($archivo);
	    	exit()
	    }
	 }
	fclose($archivo);

?> 