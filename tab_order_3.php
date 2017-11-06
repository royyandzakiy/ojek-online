<h1>MAKE AN ORDER</h1>

	<div class="tab">
		<div class="tablinks" ><span class="num-circle">1.</span> Select Destination
		</div><div class="tablinks" ><span class="num-circle">2.</span> Select a Driver
		</div><div class="tablinks active" style="margin:0px;"><span class="num-circle">3.</span> Complete your Order</div>
	</div>

	<!-- FORM ISIAN -->

		<div id="order-3" class="tabcontent">
			<H2>HOW WAS IT?</H2>

			<div class="driver-show">

				<!-- <div class="img">
					<img src="https://vignette1.wikia.nocookie.net/kamenrider/images/e/ee/002_smartbrain1024_768.gif/revision/latest?cb=20120906190053" />
				</div>
				<h4 class='driver-username'>@Bombarattata</h4>
				<p class='driver-nama'>Bomba-rattata TTatatataa</p> -->

				<!-- AMBIL DATA -->
				<?php
				if(!isset($_SESSION['id_driver'])) {
					echo "ERROR: id_driver kosong....";
					header("location:index.php");
				}

				$id_driver = $_SESSION['id_driver']; // asumsi POST id_driver tidak akan kosong

				/*CONNECT DB*/
				sql_connect('gojek_db');

				// tahap 1
			    $query_driver="SELECT profpic, username, nama FROM pengguna WHERE id = '$id_driver'";
			    $result_driver = $con->query($query_driver);

			    if ($row_driver = $result_driver->fetch(PDO::FETCH_NUM)) {
			        do {
			        	$profpic = $row_driver[0];
			        	$username = $row_driver[1];
			        	$nama = $row_driver[2];

			        	echo "<div class='img'><img src='img/".$profpic."' /></div>";
						echo "<h4 class='driver-username'>@$username</h4>";
						echo "<p class='driver-nama'>$nama</p>";
			        } while ($row_driver = $result_driver->fetch(PDO::FETCH_NUM));
			    } else {
			    	echo "<h1>FAILED TO LOAD</h1>";
			    }
			    // tahap 1_END

			    $query_driver = null;
			    $result_driver = null;

			    $con = null;
			    /*END_CONNECT DB*/

				?>
				<!-- END_AMBIL DATA -->
				<form action="order-3-done.php" name="form-order-3" id="form-order-3" method="post">

					<div class="star-rating">
						<input id="star-5" type="radio" name="rating" value="5">
						<label for="star-5" title="5 stars">
								<svg
								   xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="10.974845mm" height="10.444674mm" viewBox="0 0 10.974845 10.444674" version="1.1">
								  <g transform="translate(-21.457015,-130.42746)">
									    <path style="stroke:#f7ad0e;stroke-width:.5;stroke-opacity:1" id="star" class="active fa fa-star"
									       d="m 30.121277,140.59386 -3.186089,-1.6834 -3.192988,1.67028 0.616454,-3.55035 -2.575216,-2.52056 3.567077,-0.51084 1.601417,-3.22808 1.588122,3.23464 3.564946,0.52551 -2.585565,2.50995 z"/>
						  		  </g>
								</svg>
						</label>
						<input id="star-4" type="radio" name="rating" value="4">
						<label for="star-4" title="4 stars">
							<svg
								   xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="10.974845mm" height="10.444674mm" viewBox="0 0 10.974845 10.444674" version="1.1">
								  <g transform="translate(-21.457015,-130.42746)">
									    <path style="stroke:#f7ad0e;stroke-width:.5;stroke-opacity:1" id="star" class="active fa fa-star"
									       d="m 30.121277,140.59386 -3.186089,-1.6834 -3.192988,1.67028 0.616454,-3.55035 -2.575216,-2.52056 3.567077,-0.51084 1.601417,-3.22808 1.588122,3.23464 3.564946,0.52551 -2.585565,2.50995 z"/>
						  		  </g>
								</svg>
						</label>
						<input id="star-3" type="radio" name="rating" value="3">
						<label for="star-3" title="3 stars">
							<svg
							   xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="10.974845mm" height="10.444674mm" viewBox="0 0 10.974845 10.444674" version="1.1">
							  <g transform="translate(-21.457015,-130.42746)">
								    <path style="stroke:#f7ad0e;stroke-width:.5;stroke-opacity:1" id="star" class="active fa fa-star"
								       d="m 30.121277,140.59386 -3.186089,-1.6834 -3.192988,1.67028 0.616454,-3.55035 -2.575216,-2.52056 3.567077,-0.51084 1.601417,-3.22808 1.588122,3.23464 3.564946,0.52551 -2.585565,2.50995 z"/>
					  		  </g>
							</svg>
						</label>
						<input id="star-2" type="radio" name="rating" value="2">
						<label for="star-2" title="2 stars">
							<svg
							   xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="10.974845mm" height="10.444674mm" viewBox="0 0 10.974845 10.444674" version="1.1">
							  <g transform="translate(-21.457015,-130.42746)">
								    <path style="stroke:#f7ad0e;stroke-width:.5;stroke-opacity:1" id="star" class="active fa fa-star"
								       d="m 30.121277,140.59386 -3.186089,-1.6834 -3.192988,1.67028 0.616454,-3.55035 -2.575216,-2.52056 3.567077,-0.51084 1.601417,-3.22808 1.588122,3.23464 3.564946,0.52551 -2.585565,2.50995 z"/>
					  		  </g>
							</svg>
						</label>
						<input id="star-1" type="radio" name="rating" value="1">
						<label for="star-1" title="1 star">
							<svg
							   xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="10.974845mm" height="10.444674mm" viewBox="0 0 10.974845 10.444674" version="1.1">
							  <g transform="translate(-21.457015,-130.42746)">
								    <path style="stroke:#f7ad0e;stroke-width:.5;stroke-opacity:1" id="star" class="active fa fa-star"
								       d="m 30.121277,140.59386 -3.186089,-1.6834 -3.192988,1.67028 0.616454,-3.55035 -2.575216,-2.52056 3.567077,-0.51084 1.601417,-3.22808 1.588122,3.23464 3.564946,0.52551 -2.585565,2.50995 z"/>
					  		  </g>
							</svg>
						</label>
					</div>
				
					<input type="text" rows="40" name="driver-comment" id="driver-comment" placeholder="Your comment..." />
					<button type="submit" id="submit-order" >COMPLETE ORDER</button>
				</form>
		</div>	

	</div>