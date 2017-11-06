<?php 
	require('is_logged.php');
	require('blog_connect.php');

	if (!isset($_GET["id_driver"]))
		header('location:index.php');
	else {
		$_SESSION["id_driver"] = $_GET["id_driver"];
?>
<html> 
<head>
	<title>Ojek Online - Order</title>
	
	<link type="text/css" rel="stylesheet" href="css/reset.css">
	<link type="text/css" rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link type="text/css" rel="stylesheet" href="css/style_history.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link rel="stylesheet" type="text/css" href="profile.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
	
	<?php
		include('body_head.php');
	?>

	<div id="main">	

		<div id="nav-1" class="navmain">		
			<?php include('tab_order_3.php'); ?>
		</div>

		<div id="nav-2" class="navmain">
			<?php include('tab_history.php'); ?>
		</div>

		<div id="nav-3" class="navmain">
			<?php include('tab_profile.php'); ?>
		</div>

	</div>
	<script src="scripts/navChange.js"></script>
</body>
</html>

<?php

}

?>