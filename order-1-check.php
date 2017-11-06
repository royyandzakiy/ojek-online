<?php 
	session_start();
	if (!isset($_POST["pick_point"]) || $_POST["pick_point"] == "" || !isset($_POST["dest_point"]) || $_POST["dest_point"] == "") {
		?>

		<form action="index.php" id="order-1-checked" method="get">
			<input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="username" />

		<?php
	} else {
		// generate laman utk lanjutkan post ke order-2
		session_start();
		?>

		<form action="order-2.php" id="order-1-checked" method="get">
			<input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="username" />

		<?php
			$_SESSION['pick_point'] = $_POST['pick_point'];
			$_SESSION['dest_point'] = $_POST['dest_point'];

			// tambahkan pref_driv jk ada
			if (isset($_POST["pref_driv"]))
				$_SESSION["pref_driv"] = $_POST["pref_driv"];	
?>		
		</form>
<?php
	}
?>

		<script type="text/javascript">
			document.getElementById("order-1-checked").submit();
		</script>