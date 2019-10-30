<?php
$MiObjeto= new stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->clave=$_GET['clave'];
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: ok.php");
?> 