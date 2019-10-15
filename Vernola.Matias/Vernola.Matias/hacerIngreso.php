<?php
$MiObjeto= new stdClass();
$MiObjeto->patente=$_POST['patente'];
$MiObjeto->horaIngreso=$_POST['horaIngreso'];
$archivo=fopen('ingresados.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: index.php");
?> 