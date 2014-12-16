<?php

	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("feriainstituciones", $link);

	if ((isset($_POST[usuario]) && $_POST[usuario] != "") && (isset($_POST[contrasena]) && $_POST[contrasena] != "")) {

		$usuario = $_POST[usuario];
		$contrasena = $_POST[contrasena];


		$query = "select user, password from usuario where user='" . $usuario . "' and password='" . $contrasena . "';";

		$result = mysql_query($query, $link);

		$num_rows = mysql_num_rows($result);

		if($num_rows > 0){
			session_start();
			$_SESSION[usuario]="dsol";
			header('Location:menu.php');
		}else{
			header('Location:login.html');
		}
	
	}else{
		header('Location:login.html');
		}

mysql_close($link);
	
	
?>
