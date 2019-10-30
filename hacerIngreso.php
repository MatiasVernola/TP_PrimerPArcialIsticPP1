<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires');
        $horaIngreso = mktime();
$MiObjeto= new stdClass();
$MiObjeto->patente=$_POST['patente'];
$MiObjeto->horaIngreso=$horaIngreso;
$archivo=fopen('ingresados.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: index.php");
?> 