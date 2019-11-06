<?
include 'AccesoADatos.php';

$miobjeto = new stdClass();
$miObjeto->nombre = $_GET ['nombre'];
$miobjeto->apellido = $_GET ['apellido'];


$objetoAccesoDato = AccesoDatos::dameUnobjetoAcceso();
$select="INSERT INTO usuario (nombre, clave) VALUES ($miObjeto->nombre, $miObjeto->apellido)";
$consulta = $objetoAccesoDato->RetornarConstulra($select);
$select->execute();
?>