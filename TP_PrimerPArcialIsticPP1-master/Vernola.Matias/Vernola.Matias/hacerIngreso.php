<?php
$MiObjeto= new stdClass();
$MiObjeto->nombre=$_GET['patente'];
$MiObjeto->clave=$_GET['clave'];
$archivo=fopen('vehiculosIngresados.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: ok.php");
?> 