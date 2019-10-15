<?php

$Patente=$_GET['patente'];
$horaIngreso=$_GET['horaIngreso'];

$archivo=fopen('ingresados.txt', 'r');

    while(!feof($archivo)) 
    {
		$objeto=json_decode(fgets($archivo));
  		if ($Patente==$objeto->'patente' &&  /*Este if es para checkearSiEstaEl auto en ingresados.txt */
  			$horaIngreso==$objeto->'horaIngreso')
  		{
  			header ("Location:cobro.php"); /*si esta lo redirecciona a la pagina cobro.php*/
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