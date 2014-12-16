<style>
	table, tr, th, td{
		border: 1px solid;
	}
	
</style>

<?php

	include_once "validaSesion.php";

	sesionValida();


function presentaCursos($num_rows, $clave, $nombre) {

	echo "<h1>Cursos</h1>";
	echo "$num_rows Cursos\n";
	echo "<br />";
	echo "<br />";
	echo "<table>
		<thead>
			<th>Clave</th>
			<th>Nombre</th>
			<th>Editar</th>
			<th>Eliminar</th>
		<thead>
		<tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){
		echo "<tr>";
		echo "<td>". $clave[$pos_row] . "</td>";
		echo "<td>". $nombre[$pos_row] . "</td>";
		echo "<td><a href='editarCurso.php?claveCurso=" . $clave[$pos_row] . "' />Editar</a></td>";
		echo "<td><a href='eliminaCurso.php?claveCurso=" . $clave[$pos_row] . "' />Eliminar</a></td>";	
		echo "</tr>";

		$pos_row = $pos_row + 1;
	}
	echo "	</tbody>
		</table>";
	
	echo "<br />";
	echo "<br />";
	echo "<a href='menu.php'> Regresar a menu </a>";

}
?>
