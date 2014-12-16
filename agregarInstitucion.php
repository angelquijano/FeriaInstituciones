<?php

	include_once "validaSesion.php";

	sesionValida();
	
?>

<html>
<head>

	<title>Captura de una institucion</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript" 
		src="valida.js">
	</script>


</head>

<body>
	<h1>Agregar una institucion</h1>

	<br>
	<form action="insertaInstitucion.php" method="post" onSubmit="return validate(this)">
		<table class="signup" border="0" cellpadding="2" cellspacing="15" bgcolor="#eeeeee">
			<tbody>
				<tr>
					<td>Nombre de la institucion</td>
					<td><input maxlength="70" type="text" name="nombreinstitucion"></td>
				</tr>
				<tr>
					<td>Nombre del proyecto</td>
					<td><input maxlength="70" type="text" name="nombreproyecto"></td>
				</tr>
				<tr>
					<td>Horas del proyecto</td>
					<td><input maxlength="3" type="text" name="horasproyecto"></td>
				</tr>
				<tr>
					<td>Vacantes</td>
					<td><input maxlength="3" type="text" name="vacantesproyecto"></td>
				</tr>
				<tr>
					<td>Vacantes permitidas</td>
					<td><input maxlength="3" type="text" name="vacantespermitidasproyecto"></td>
				</tr>
				<tr>
					<td>Descripcion del proyecto</td>
					<td><input maxlength="500" type="text" name="descripcionproyecto"></td>
				</tr>
				<tr>
					<td>Contacto de la institucion</td>
					<td><input maxlength="500" type="text" name="contactoinstitucion"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Agregar Institucion" /></td>
				</tr>

			</tbody>
		</table>
	</form>

	
</body>

</html>
