<?php
	function sql_connect($database) {

		try {
			global $con;
			$con = new PDO("mysql:host=localhost;dbname=".$database,"root","");

			// DEBUG #1 - connection
			// echo " : isi \$con || " . var_dump($con);

			/* !!!!JANGAN PERNAH LUPA BAGIAN INI KALO MAU PAKE Exception!!!!! */
			if (!isset($con)) {
				echo("GAGAL KONEKSI");
				die();
			} else {
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			};

		}  catch (PDOException $e) {
			echo "query / koneksi bermasalah : " . $e->getMessage() . "<br/>";
			die();
		};
	};
?>