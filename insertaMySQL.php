<?php

	include_once "validaSesion.php";

	sesionValida();

function conectaBD() {

	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("feriainstituciones", $link);

	mysql_query("set autocommit=0;", $link);
	mysql_query("start_transaction;", $link);

	return $link;
}


function commitBD($result, $link) {

	if ($result) {
		echo "Operacion correcta";
		mysql_query("commit;", $link);
	} else {
		echo "Error";
		mysql_query("rollback;", $link);
	}

}


?>

