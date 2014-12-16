<?php

	function sesionValida() {

		session_start();
			if (!isset($_SESSION[usuario])) {
				header('Location:login.html');
		}


	}


?>
