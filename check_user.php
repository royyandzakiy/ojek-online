<?php
require_once('blog_connect.php');
// get the q parameter from URL
$user = $_REQUEST["q"];

/*CONNECT DB*/
require_once('blog_connect.php');

sql_connect('gojek_db');

$query = "SELECT COUNT(*) FROM pengguna WHERE username='$user'";
$result = $con->query($query);

if ($row = $result->fetch(PDO::FETCH_NUM)) {
   if ($row[0] >= 1)
        echo 1;
    else
        echo 0;
} else {
    echo "QUERY GAGAL";
}
// tahap 1_END

$query = null;
$result = null;

$con = null;
/*END_CONNECT DB*/
// Output "no suggestion" if no hint was found or output correct values 

?>