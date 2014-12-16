<?php

	session_start();
	if (!isset($_SESSION[usuario])) {
		header('Location:login.html');
	}
	
?>


<html>
<head>
</head>

<body>
	<h1>Administracion de cursos</h1>
	<br>
		<table>
			<tbody>
				<tr>
					<td>1. </td>
					<td><a href='formularioCurso.php'> Agregar cursos </a></td>
				</tr>
				<tr>
					<td>2. </td>
					<td><a href='cursos_2.php'> Modificar o eliminar cursos </a></td>
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
