<?php

	include_once "insertaMySQL.php";
	include_once "validaSesion.php";

	sesionValida();


	$link = conectaBD();


	$claveCurso  = $_GET[claveCurso];

	$result = mysql_query("DELETE FROM curso WHERE clave = '" . $claveCurso . "'", $link);

	commitBD($result, $link);

	echo "<br />";
	echo "<br />";
	echo "<a href='menu.php'> Regresar a menu </a>";
	mysql_close($link);

?>
