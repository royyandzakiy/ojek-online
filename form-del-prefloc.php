<?php

require_once('blog_connect.php');

sql_connect('gojek_db');

$rowId = $_POST["rowId"];

$sql = "DELETE FROM prefloc WHERE id_prefloc='$rowId'";
$result = $con->query($sql);

$result = null;
$con = null;

header('location:edit-pref-loc.php');

?>