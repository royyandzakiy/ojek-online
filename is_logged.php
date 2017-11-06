<?php
	session_start();
	if(!isset($_SESSION["is_logged"])) {
		/* ubah dengan login.php */
		header('location:login.php');
	} else {
		if (!$_SESSION["is_logged"]) {
			/* ubah dengan login.php */
			header('location:login.php');
		} else {
			// do nothing
		}
	}
?>