<?php
	require('is_logged.php');
	require_once('blog_connect.php');

	unset($_SESSION['pick_point']);
	unset($_SESSION['dest_point']);
	unset($_SESSION['pref_driv']);

	if(!isset($_GET["username"])) {
		/* ubah dengan login.php */
		// header('location:test.php');
	}
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
		if(isset($_POST['nav_active'])) {
			$nav_active = $_POST['nav_active'];
		}
		if(isset($_GET['nav_active'])) {
			$nav_active = $_GET['nav_active'];
		}
		$nav_active = 3;
		include('body_head.php');
	?>

	<div id="main">	

		<div id="nav-1" class="navmain">		
			<?php include('tab_order.php'); ?>
		</div>

		<div id="nav-2" class="navmain">
			<?php include('tab_history.php'); ?>
		</div>

		<div id="nav-3" class="navmain">
		<?php 
	require_once('blog_connect.php');

	sql_connect('gojek_db');

	$id = $_SESSION["id_pengguna"];
    
    $sql = "SELECT nama, telefon, is_active, profpic FROM pengguna WHERE id = '$id'";
    $result = $con->query($sql);
    $row = $result->fetch(PDO::FETCH_NUM);
    $user = array("nama"=>$row[0], "telefon"=>$row[1], "is_active"=>$row[2], "profpic"=>$row[3]);

?>

	<h1>EDIT PROFILE INFORMATION</h1>
    <img class="edit-pic" src="img/<?php echo $user["profpic"]; ?>" alt="Your Pic">
    <div class="update-profile-picture">
        <h3>Update Profile Picture</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		    <input type="submit" name="nama-file">
		    <input type="file" name="fileToUpload" id="fileToUpload" />
		</form>
    </div>
    
    <div class="form-edit-profile">
	    <form name="form-update-prof" action="update-prof.php" method="POST">
	        Your name 
	       	<?php 
	       		echo "<input class='form-profile' type='text' value=".$user["nama"]." name='nama' /><br>";
	       	?>
	        Phone  
	        <?php 
	       		echo "<input class='form-profile' type='text' value=".$user['telefon']." name='telefon' /><br>";
	       	?>         
	        Status Driver 
	        <div class="dri-button">
	        	<label class="switch">
	        		<?php if ($user['is_active']==0) {
	        			echo "<input type='checkbox' name='is_active' notchecked />";
	        		} else {
	        			echo "<input type='checkbox' name='is_active' checked />";
	        		}
	        		?>
					<span class="slider round"></span>
				</label>
	        </div> <br>
	        <div class="button">
	        	<a href="index.php?nav_active=3" class="button-back">BACK</a>
	        	<input type="hidden" name="nav_active" value="3" />
	        	<input type="submit" class="button-save" name="button-save" value="SAVE"/><br />
	        </div>
    	
	    </form> 
    </div>

<?php 
	$result = null;
	$row = null;
	$con = null;
?>

</div>

	</div>
	<script src="scripts/navChange.js"></script>
	<script src="scripts/hide.js"></script>
</body>
</html> 