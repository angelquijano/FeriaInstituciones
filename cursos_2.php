
<?php

	include_once "insertaMySQL.php";
	include_once "vistaCursos.php";
	
	include_once "validaSesion.php";

	sesionValida();


$link = conectaBD();

$result = mysql_query("SELECT clave, nombre FROM curso order by nombre;", $link);
$num_rows = mysql_num_rows($result);

commitBD($result, $link);

mysql_close($link);

$pos_row = 0;
$clave = array();
$nombre = array();

while($row = mysql_fetch_array($result)){
	
	$clave[$pos_row] = $row['clave'];
	$nombre[$pos_row] = $row['nombre'];
	
	$pos_row = $pos_row + 1;
}


presentaCursos($num_rows, $clave, $nombre);


?>
