<!-- CERIATNYA SELESAI LOGIN
		- tau id_pengguna
		- tau username
		- is_logged
	 -->
<html>

<?php
	session_start();
	$_SESSION= array();
	session_destroy();
?>

	<form method="get" action="test_login.php" id="test_id_pengguna">
		<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>"/>
		<input type="submit" />
	</form>
</html>