<?php

require_once('blog_connect.php');

sql_connect('gojek_db');

var_dump($_POST);

$rowId = $_POST["rowId"];
$location = $_POST["location"];

echo $rowId;
echo $location;

$sql = "UPDATE prefloc SET location = '$location' WHERE id_prefloc='$rowId'";
$result = $con->query($sql);

$result = null;
$con = null;

// header('location:edit-pref-loc.php');

?>