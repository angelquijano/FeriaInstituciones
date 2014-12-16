<?php

	include ("insertaMySQL.php");

	sesionValida();

	$link = conectaBD();

	$codigoInstitucion  = $_POST[codigoInstitucion];
	$nombreinstitucion  = $_POST[nombreinstitucion];
	$nombreproyecto  = $_POST[nombreproyecto];
	$horasproyecto  = $_POST[horasproyecto];
	$vacantes  = $_POST[vacantesproyecto];
	$vacantespermitidas  = $_POST[vacantespermitidasproyecto];
	$descripcionproyecto  = $_POST[descripcionproyecto];
	$contactoinstitucion  = $_POST[contactoinstitucion];


	$result = mysql_query("UPDATE institucion SET nombreinstitucion='" . $nombreinstitucion . "', nombreproyecto='" . $nombreproyecto . "', horasproyecto='" . $horasproyecto . "', vacantesproyecto='" . $vacantes . "', vacantespermitidasproyecto='" . $vacantespermitidas . "', descripcionproyecto='" . $descripcionproyecto . "', contactoinstitucion='" . $contactoinstitucion . "' WHERE codigo='" . $codigoInstitucion . "'", $link);

	commitBD($result, $link);

	echo "<br />";
	echo "<br />";
	echo "<a href='menu.php'> Regresar a menu </a>";

	mysql_close($link);

?>
