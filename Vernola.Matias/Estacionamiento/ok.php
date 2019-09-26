<!DOCTYPE html>
<html>
<body>

<h2>Ya perteneces a nuestra comunidad</h2>

<form action="registro.php">
 <img src="ok.jpg" borde="0" height="500" width="500"> 

</form> 
<p>Fuiste registrado correctamente :)</p>

<?php
header("Location:ingresar.php"); //Envio del ok.php a ingresar.php para que cargue la patente y la hora //
exit;
?>
	
</body>
</html>