<?php
  require_once('blog_connect.php');
?>
<!DOCTYPE html>
<?php
  session_start();
  $id = $_SESSION['id_pengguna'];

  /*CONNECT DB*/
  sql_connect('gojek_db');

  // tahap 1
    $query_driver="SELECT pengguna.profpic, pemesanan.tanggal, pengguna.nama, pemesanan.pick_point, pemesanan.dest_point, pemesanan.rating, pemesanan.comment FROM pemesanan JOIN pengguna ON (pengguna.id = pemesanan.id_pengguna) WHERE pemesanan.id_driver = '$id'";
    $result_driver = $con->query($query_driver);

?> 
<html> 
<head>
  <title>Ojek Online - Order</title>
  
  <link type="text/css" rel="stylesheet" href="css/reset.css">
  <link type="text/css" rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <link type="text/css" rel="stylesheet" href="css/style_history.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <link rel="stylesheet" type="text/css" href="profile.css">

</head>
<body>

  <?php
    $nav_active = 2;
    include('body_head.php');
  ?>

  <div id="main"> 

    <div id="nav-1" class="navmain">    
      <?php include('tab_order.php'); ?>
    </div>

    <div id="nav-2" class="navmain">
      <?php include('tab_history_2.php'); ?>
    </div>

    <div id="nav-3" class="navmain">
      <?php include('tab_profile.php'); ?>
    </div>

  </div>

  <script src="scripts/navChange.js"></script>
  <script src="scripts/hide.js"></script>
</body>
</html> 