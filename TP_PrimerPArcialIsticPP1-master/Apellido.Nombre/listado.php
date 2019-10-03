
<?

$miPatenteParaCobrar=$_GET['patente'];

$miArchivo = fopen("estacionados.txt", 'r')
while (!feof($miArchivo))
{
	$objeto=json_decode(fgets($miArchivo));
	if($objeto->patente==$miPatenteParaCobrar)
	{
     $ahora=mktime();
     $TiempoTrascurrido= $ahora-$objeto->fechaIngreso;
     //var_dump(%TiempoTrascurrido);
     //die();
     $importe=($tiempoTrascurrido/60)*100;
     $objeto->importe=$importe;
     $objeto->fechaSalida=$ahora;
     //ahora tengo que guardar en el archivo facturados.txt con un fope, el mismo codigo que sue en registro.php
     break;
	}

}
fclose($miArchivo)
