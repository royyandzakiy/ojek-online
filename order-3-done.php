<?php
	session_start();
	/*echo var_dump($_SESSION) . "<br/>";
	echo var_dump($_POST);*/

	if(isset($_POST["rating"])) {
		$id_pengguna = $_SESSION["id_pengguna"];
		$id_driver = $_SESSION["id_driver"];
		$tanggal = date("Y-m-d");
		$pick_point = $_SESSION["pick_point"];
		$dest_point = $_SESSION["dest_point"];

		$rating = $_POST["rating"];
		$comment = htmlspecialchars($_POST["driver-comment"]);

		/* DRBUG */
		/*echo $id_pengguna . "<br/>";
		echo $id_driver . "<br/>";
		echo $tanggal . "<br/>";
		echo $pick_point . "<br/>";
		echo $dest_point . "<br/>";
		echo $rating . "<br/>";
		echo $comment . "<br/>";*/

		/*CONNECT DB*/
		require('blog_connect.php');
		sql_connect('gojek_db');

		// tahap 1
	    $query_insert="INSERT INTO pemesanan (id_pengguna, id_driver, tanggal, pick_point, dest_point, rating, comment) VALUES ('$id_pengguna', '$id_driver', '$tanggal', '$pick_point', '$dest_point', '$rating', '$comment')";
	    $result_insert = $con->query($query_insert);

	    if ($result_insert) {
	    	// echo "SUCCESS! DATA ADDED";
	    } else {
	    	// echo "FAILED!";
	    }

	    $query_insert = null;
	    $result_insert = null;

	    $con = null;
	    /*END_CONNECT DB*/

	    $_POST = array();
		unset($_SESSION["pick_point"]);
		unset($_SESSION["dest_point"]);
		unset($_SESSION["pref_driv"]);
		unset($_SESSION["id_driver"]);

		?>
			<form action="index.php" method="get" id="order-3-done">
				<input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="username" />
			</form>

			<script>
				document.forms["order-3-done"].submit();
			</script>
		<?php
	} else {
		// echo "RATING BELUM DIISI, PENGISIAN TIDAK TERJADI";
		?> 

		<form action="order-3.php" method="get" id="order-3-done">
			<input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="username" />
			<input type="hidden" value="<?php echo $_SESSION["id_driver"]; ?>" name="id_driver" />
		</form>

		<script>
			document.forms["order-3-done"].submit();
		</script>

		<?php
	}

	/* RESET */

	// header('location:index.php');
?>