<?php

$CheckearNombre=$_GET['nombre'];
$CheckearClave=$_GET['clave'];

$archivo=fopen('usuarios.txt', 'r');

    while(!feof($archivo)) 
    {
		$objeto=json_decode(fgets($archivo));


  		if ($objeto->nombre==$_GET['nombre'])
  			#&&  /*Este if es para checkearSiEstaEl usuario en usuarios.txt */
  			/*$CheckearClave==$objeto->clave)*/
  		{
  			if ($objeto->clave==$_GET['clave'])
             {
  			#var_dump($objeto->nombre);
  			#echo $_GET['nombre'];
  			header ("Location:ok.php"); /*si esta lo redirecciona a la pagina ok.php*/
  			#fclose($archivo);
  			#exit();
  		      }
  		
	        else 
	    {
	    	header("Location: no.php");
	    	fclose($archivo);
	    	exit();
	    }
	     }
	 }
	fclose($archivo);

?> 