<?php 

	include_once "validaSesion.php";
	include_once "insertaMySQL.php";

	sesionValida();


	$codigoInstitucion  = $_GET[codigoInstitucion];
	
	$link = conectaBD();
	
	$query = "SELECT nombreinstitucion, nombreproyecto, horasproyecto, vacantes, vacantespermitidas, descripcionproyecto, contactoinstitucion FROM Institucion WHERE codigo = '" . $codigoInstitucion . "'";
	$result = mysql_query($query, $link);

	$fila = mysql_fetch_row($result);
	$nombreinstitucion = $fila[0];
	$nombreproyecto = $fila[1];
	$horasproyecto = $fila[2];
	$vacantes = $fila[3];
	$vacantespermitidas = $fila[4];
	$descripcionproyecto = $fila[5];
	$contactoinstitucion = $fila[6];
?>

<html>
<head>
</head>

<body>
	<h1>Modificar una Institucion</h1>
	<br>
	<form action="actualizaInstitucion.php" method="POST">
		<table>
			<tbody>
				<tr>
					<td>Codigo</td>
					<td>
						<?php echo $codigoInstitucion; ?>
						<input type="hidden" name="codigoInstitucion" value="<?php echo $codigoInstitucion; ?>" />
					</td>
				</tr>
				<tr>
					<td>Nombre de la institucion</td>
					<td><input maxlength="70" type="text" name="nombreinstitucion" value="<?php echo $nombreinstitucion; ?>" /></td>
				</tr>
				<tr>
					<td>Nombre del proyecto</td>
					<td><input maxlength="70" type="text" name="nombreproyecto" value="<?php echo $nombreproyecto; ?>" /></td>
				</tr>
				<tr>
					<td>Horas del proyecto</td>
					<td><input maxlength="3" type="text" name="horasproyecto" value="<?php echo $horasproyecto; ?>" /></td>
				</tr>
				<tr>
					<td>Vacantes</td>
					<td><input maxlength="3" type="text" name="vacantesproyecto" value="<?php echo $vacantes; ?>" /></td>
				</tr>
				<tr>
					<td>Vacantes permitidas</td>
					<td><input maxlength="3" type="text" name="vacantespermitidasproyecto" value="<?php echo $vacantespermitidas; ?>" /></td>
				</tr>
				<tr>
					<td>Descripcion del proyecto</td>
					<td><input maxlength="500" type="text" name="descripcionproyecto" value="<?php echo $descripcionproyecto; ?>" /></td>
				</tr>
				<tr>
					<td>Contacto de la institucion</td>
					<td><input maxlength="500" type="text" name="contactoinstitucion" value="<?php echo $contactoinstitucion; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Actualizar Institucion" /></td>
				</tr>
			</tbody>
		</table>
	</form>
</body

</html>
