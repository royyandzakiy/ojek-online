<!-- CERIATNYA SELESAI LOGIN
		- tau id_pengguna
		- tau username
		- is_logged
	 -->
<html>

<?php
	session_start();
	$_SESSION["id_pengguna"] = 7;
	$_SESSION["username"] = "royRoy";
	$_SESSION["nama"] = "roy";
	$_SESSION["is_logged"] = TRUE;
?>

	<form method="get" action="index.php" id="test_id_pengguna">
		<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>"/>
		<input type="submit" />
	</form>

	<script>
		document.forms['test_id_pengguna'].submit();
	</script>
</html>