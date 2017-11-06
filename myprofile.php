<!DOCTYPE html>

<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>

<body>

	<?php
	require_once('blog_connect.php');
		sql_connect('gojek_db');

		$sql  = "SELECT * FROM pengguna WHERE id=1";
		$sql2 = "SELECT AVG(rating) FROM pemesanan WHERE id_driver=1";
		$sql3 = "SELECT location FROM prefloc WHERE id_driver=1";
		$sql4 = "SELECT count(rating) FROM pemesanan WHERE id_driver=1";
		$result = $con->query($sql);
		$result2 = $con->query($sql2);
		$result3 = $con->query($sql3); 
		$result4 = $con->query($sql4);
		$user = $result->fetch(PDO::FETCH_NUM);
		$rating = $result2->fetch(PDO::FETCH_NUM);
		$votes = $result4->fetch(PDO::FETCH_NUM);
	?>
	<div class="header-my-profile">
		MY PROFILE
		<a href="edit-profile.php">
    		<img class="edit-icon" src="edit.png">
    	</a>
	</div>

	<div class="my-profile">
	    <?php echo "<img class='prof-pic' src=".$user[7]." alt='Foto Profile'><br>";?>
	    <div class="username-myprof"><?php echo "@".$user[1]; ?><br></div>
	    <?php
	    	echo $user[3]."<br>";
	    	if ($user[6] == 1) {
	    		echo "Driver | "; ?>
	    		<div class="rating-myprof">
	    			&#9734
	    			<?php echo number_format((float)$rating[0], 1, '.', ''); ?>
	    		</div>
	    		<?php echo "(".$votes[0]." votes)<br>";?> 
	    <?php
	    	}
	    	echo $user[4]."<br>";
	    	echo $user[5]."<br>";
	    ?>
    </div>

    <?php 
    if ($user[6] == 1) { ?>
    	<div class="pref-loc">
	    	<div class="header-pref-loc">
		    	<b> PREFFERED LOCATIONS:</b>
		    	<a href="edit-pref-loc.php">
		    		<img class="edit-icon" src="edit.png"> 
		    	</a>
		    </div>
		    
			<div class="isi-pref-loc">
			    <?php
				    while ($row = $result3->fetch(PDO::FETCH_NUM)) {
		    	 		echo "<ul>";
		     		 	echo "<li>". $row[0]. "</li>";
		     		  	echo "<ul>";
		    		}	
			    ?>
			</div>
		    
	    </div>	
    <?php } 
	    $result = null;
		$result2 = null;
		$result3 = null;
		$result4 = null;
		$user = null;
		$rating = null;
		$votes = null;
		$con = null;
    ?>
    

</body>
</html>