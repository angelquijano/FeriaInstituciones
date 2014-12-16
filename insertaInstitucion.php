<?php

	include_once "insertaMySQL.php";
	include_once "validaSesion.php";


	sesionValida();


	$nombreinstitucion  = $_POST["nombreinstitucion"];
	$nombreproyecto = $_POST["nombreproyecto"];
	$horasproyecto = $_POST["horasproyecto"];
	$vacantesproyecto = $_POST["vacantesproyecto"];
	$vacantespermitidasproyecto = $_POST["vacantespermitidasproyecto"];
	$descripcionproyecto = $_POST["descripcionproyecto"];
	$contactoinstitucion = $_POST["contactoinstitucion"];

	echo "Nombre de la institucion " . $nombreinstitucion;
	echo "Nombre del proyecto " . $nombreproyecto;
	echo "Horas del proyecto " . $horasproyecto;
	echo "Vacantes del proyecto " . $vacantesproyecto;
	echo "Vacantes permitidas del proyecto " . $vacantespermitidasproyecto;
	echo "Descripcion del proyecto " . $descripcionproyecto;
	echo "Contacto de la institucion " . $contactoinstitucion;


	$link = conectaBD();

	$result = mysql_query("INSERT INTO institucion(nombreinstitucion, nombreproyecto, horasproyecto, vacantes, vacantesfinales, descripcionproyecto, contactoinstitucion) VALUES ('" . $nombreinstitucion . "','" . $nombreproyecto . "''" . $horasproyecto . "','" . $vacantesproyecto . "','" . $vacantespermitidasproyecto . "','" . $descripcionproyecto . "','" . $contactoinstitucion . "');", $link);

	commitBD($result, $link);

	mysql_close($link);
	header('Location: menu.php');

?>
