
<?php

	include_once "insertaMySQL.php";
	include_once "vistaInstituciones.php";
	include_once "validaSesion.php";

	sesionValida();


$link = conectaBD();

$result = mysql_query("SELECT nombreinstitucion, nombreproyecto, horasproyecto, vacantes, vacantesfinales, descripcionproyecto, contactoinstitucion FROM institucion;", $link);
$num_rows = mysql_num_rows($result);

commitBD($result, $link);

mysql_close($link);

$pos_row = 0;
$nombreinstitucion = array();
$nombreproyecto = array();
$horasproyecto = array();
$vacantesproyecto = array();
$vacantespermitidasproyecto = array();
$descripcionproyecto = array();
$contactoinstitucion = array();

while($row = mysql_fetch_array($result)){
	
	$nombreinstitucion[$pos_row] = $row['nombreinstitucion'];
	$nombreproyecto[$pos_row] = $row['nombreproyecto'];
	$horasproyecto[$pos_row] = $row['horasproyecto'];
	$vacantesproyecto[$pos_row] = $row['vacantes'];
	$vacantespermitidasproyecto[$pos_row] = $row['vacantesfinales'];
	$descripcionproyecto[$pos_row] = $row['descripcionproyecto'];
	$contactoinstitucion[$pos_row] = $row['contactoinstitucion'];

	
	$pos_row = $pos_row + 1;
}


presentaInstituciones($num_rows, $nombreinstitucion, $nombreproyecto, $horasproyecto, $vacantesproyecto, $vacantespermitidasproyecto, $descripcionproyecto, $contactoinstitucion);


?>
