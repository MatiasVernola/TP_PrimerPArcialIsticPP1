<?php
session_start();

$CheckearNombre=$_GET['nombre'];
$CheckearClave=$_GET['clave'];

include 'AccesoDatos.php';
  $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("select * nombre , clave  from usuario");
      $consulta->execute();

    foreach($datos as $usuario) //con esto reemplazo el while
    {
		
  		if ($CkeckearNombre==$usuario["nombre"] &&  /*Este if es para checkearSiEstaEl usuario en la tabala usuarios de mi base de datos istic2019*/
  			$CheckearClave==$usuario["clave"])
  		{
  			$_SESSION['nombre']=$_GET['nombre'];
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