<style>
	table, tr, th, td{
		border: 1px solid;
	}
	
</style>

<?php

	include_once "validaSesion.php";

	sesionValida();


function presentaInstituciones($num_rows, $codigo, $nombreinstitucion, $nombreproyecto, $horasproyecto, $vacantesproyecto, $vacantespermitidasproyecto, $descripcionproyecto, $contactoinstitucion) {

	echo "<h1>Instituciones</h1>";
	echo "$num_rows Instituciones\n";
	echo "<br />";
	echo "<br />";
	echo "<table>
		<thead>
			<th>Codigo</th>
			<th>Nombre de la institucion</th>
			<th>Nombre del proyecto</th>
			<th>Horas</th>
			<th>Vacantes totales</th>
			<th>Vacantes permitidas</th>
			<th>Descripcion</th>
			<th>Contacto</th>
			<th>Editar</th>
			<th>Eliminar</th>
		<thead>
		<tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){
		echo "<tr>";
		echo "<td>". $codigo [$pos_row] . "</td>";
		echo "<td>". $nombreinstitucion [$pos_row] . "</td>";
		echo "<td>". $nombreproyecto [$pos_row] . "</td>";
		echo "<td>". $horasproyecto [$pos_row] . "</td>";
		echo "<td>". $vacantesproyecto [$pos_row] . "</td>";
		echo "<td>". $vacantespermitidasproyecto [$pos_row] . "</td>";
		echo "<td>". $descripcionproyecto [$pos_row] . "</td>";
		echo "<td>". $contactoinstitucion [$pos_row] . "</td>";
		echo "<td><a href='editarInstitucion.php? codigoInstitucion=" . $codigo[$pos_row] . "' />Editar</a></td>";
		echo "<td><a href='eliminaInstitucion.php? codigoInstitucion=" . $codigo[$pos_row] . "' />Eliminar</a></td>";	
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
