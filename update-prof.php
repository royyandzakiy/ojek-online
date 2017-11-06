<?php 
	require_once('blog_connect.php');

	sql_connect('gojek_db');
	session_start();
	$id = $_SESSION["id_pengguna"];

    $sql = "SELECT nama, telefon, is_active FROM pengguna WHERE id = '$id'";
    var_dump($con);
    $result = $con->query($sql);
    $row = $result->fetch(PDO::FETCH_NUM);
    $user = array("nama"=>$row[0], "telefon"=>$row[1], "is_active"=>$row[2]);

	function updatenama($con) {
		$id = $_SESSION["id_pengguna"];
		$nama = $_POST['nama'];
		$_SESSION["nama"] = $nama;
		$sql = "UPDATE pengguna SET nama = '$nama' WHERE pengguna.id = '$id'";
		$result = $con->query($sql);
	}
	function updateTelp($con) {
		$id = $_SESSION["id_pengguna"];
		$telp = $_POST['telefon'];
		$sql = "UPDATE pengguna SET telefon = '$telp' WHERE pengguna.id = '$id'";
		$result = $con->query($sql);
	}

	function setFalse($con) {
		$id = $_SESSION["id_pengguna"];
		$sql = "UPDATE pengguna SET is_active = 0 WHERE pengguna.id = '$id'";
		$result = $con->query($sql);	
	}

	function setTrue($con) {
		$id = $_SESSION["id_pengguna"];
		$sql = "UPDATE pengguna SET is_active = 1 WHERE pengguna.id = '$id'";
		$result = $con->query($sql);
	}

	// STUFF HAPPENING
	if($_POST['nama'] != $user["nama"]) 
	{
	  	updatenama($con);
	} 
	if($_POST['telefon']!= $user["telefon"])
	{
	    updateTelp($con);
	} 

	if (isset($_POST['is_active'])) {
		setTrue($con);	
	} else {
		setFalse($con);
	}

	if (isset($_POST['fileToUpload'])) {
		echo $_POST['fileToUpload'];
	}

	header("location:index.php");

?>