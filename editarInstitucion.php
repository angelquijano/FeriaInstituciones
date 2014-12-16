<?php 

	include_once "validaSesion.php";
	include_once "insertaMySQL.php";

	sesionValida();


	$claveCurso  = $_GET[claveCurso];
	
	$link = conectaBD();
	
	$query = "SELECT nombre FROM curso WHERE clave = '" . $claveCurso . "'";
	$result = mysql_query($query, $link);
//	echo $query;
	$fila = mysql_fetch_row($result);
	$nombreCurso = $fila[0];
?>

<html>
<head>
</head>

<body>
	<h1>Modificar un curso</h1>
	<br>
	<form action="actualizaCurso.php" method="POST">
		<table>
			<tbody>
				<tr>
					<td>Clave</td>
					<td>
						<?php echo $claveCurso; ?>
						<input type="hidden" name="claveCurso" value="<?php echo $claveCurso; ?>" />
					</td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input maxlength="50" type="text" name="nombreCurso" value="<?php echo $nombreCurso; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Actualizar Curso <?php echo $claveCurso; ?>" /></td>
				</tr>
			</tbody>
		</table>
	</form>
</body

</html>
