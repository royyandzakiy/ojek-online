<?php
	require_once('blog_connect.php');
		sql_connect('gojek_db');
		// session_start();
		$id = $_SESSION['id_pengguna'];

		$sql  = "SELECT * FROM pengguna WHERE id='$id'";
		$result = $con->query($sql);
		$user = $result->fetch(PDO::FETCH_NUM);


		$sql2 = "SELECT AVG(rating) FROM pemesanan WHERE id_driver='$id'";
		$sql3 = "SELECT location FROM prefloc WHERE id_driver='$id'";
		$sql4 = "SELECT count(rating) FROM pemesanan WHERE id_driver='$id'";
		$result2 = $con->query($sql2);
		$result3 = $con->query($sql3); 
		$result4 = $con->query($sql4);
		$rating = $result2->fetch(PDO::FETCH_NUM);
		$votes = $result4->fetch(PDO::FETCH_NUM);

		$n = 0;
	?>
	<div class="header-my-profile">
		MY PROFILE
		<a href="edit-profile.php">
    		<img class="edit-icon" src="img/edit.png">
    	</a>
	</div>

	<div class="my-profile">
	    <?php echo "<img class='prof-pic' src='img/".$user[7]."' alt='Foto Profile'><br>";?>
	    <div class="username"><?php echo "@".$user[1]; ?><br></div>
	    <?php
	    	echo $user[3]."<br>";
	    	if ($user[6] == 1) {
	    		echo "Driver | "; ?>
	    		<div class="rating">
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
		    		<img class="edit-icon" src="img/edit.png"> 
		    	</a>
		    </div>
		    
			<div class="isi-pref-loc">
			    <?php
				    while ($row = $result3->fetch(PDO::FETCH_NUM)) {
				    	$n++;
		    	 		echo "<ul>";
		     		 	echo "<li style='margin-left:".(30 * $n)."px;'>". $row[0]. "</li>";
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