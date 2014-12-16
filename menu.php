<?php

	include "validaSesion.php";

	sesionValida();
	
?>


<html>
<head>
</head>

<body>
	<h1>Administracion de Instituciones</h1>
	<br>
		<table>
			<tbody>
				<tr>
					<td>1. </td>
					<td><a href='agregarInstitucion.php'> Agregar Instituciones </a></td>
				</tr>
				<tr>
					<td>2. </td>
					<td><a href='cursos_2.php'> Modificar o eliminar Instituciones </a></td>
				</tr>
				<tr>
					<td>3. </td>
					<td><a href='formularioGrupo.php'> Agregar grupos </a></td>
				</tr>
				<tr>
					<td>4. </td>
					<td><a href='cerrarSesion.php'> Cerrar sesion </a></td>
				</tr>
			</tbody>
		</table>
</body>

</html>
