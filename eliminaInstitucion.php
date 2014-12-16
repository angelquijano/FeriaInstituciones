<?php

	include_once "insertaMySQL.php";
	include_once "validaSesion.php";

	sesionValida();


	$link = conectaBD();


	$codigoInstitucion  = $_GET[codigoInstitucion];

	$result = mysql_query("DELETE FROM institucion WHERE codigo = '" . $codigoInstitucion . "'", $link);

	commitBD($result, $link);

	mysql_close($link);

	echo "<br />";
	echo "<br />";
	echo "<a href='menu.php'> Regresar a menu </a>";
	

?>
