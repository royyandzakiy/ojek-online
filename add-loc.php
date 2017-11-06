<?php 

    require_once('blog_connect.php');

    sql_connect('gojek_db');

    session_start();
    $id = $_SESSION["id_pengguna"];

    $sql = "SELECT location FROM prefloc WHERE id_driver='$id'";
    $result = $con->query($sql);

    function addLocation($con) {
        $new_loc = $_POST['add-new-loc'];
        $id = $_SESSION["id_pengguna"];
        $sql_add = "INSERT INTO prefloc (id_driver, location) VALUES ('$id', '$new_loc')";
        $result = $con->query($sql_add);
    }
	
    addLocation($con);
    $result = null;
    $con = null;
    header("Location: edit-pref-loc.php");

?>