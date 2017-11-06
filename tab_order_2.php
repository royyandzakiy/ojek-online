<h1>MAKE AN ORDER</h1>

	<div class="tab">
		<div class="tablinks"><span class="num-circle">1</span> Select Destination
		</div><div class="tablinks active" ><span class="num-circle">2</span> Select a Driver
		</div><div class="tablinks" style="margin:0px;"><span class="num-circle">3</span> Complete your Order</div>
	</div>

	<!-- FORM ISIAN -->

		<div id="order-2" class="tabcontent">
			<div id="pref_driver">
				<H2>PREFERRED DRIVERS:</H2>

				<div class="driver">
					<form action="order-3.php" name="form-order-2" id="form-order-2" method="get">

					<!-- DRIVER BERULANG -->
					<?php

					$pick_point = $_SESSION["pick_point"];
					$dest_point = $_SESSION["dest_point"];
					if (isset($_SESSION["pref_driv"]))
						if ($_SESSION["pref_driv"] != "") {
						
						$pref_driv = $_SESSION["pref_driv"];

						/*CONNECT DB*/
						sql_connect('gojek_db');

						// tahap 1
					    $query_driver="SELECT pengguna.id, pengguna.profpic, pengguna.nama FROM prefloc INNER JOIN pengguna ON prefloc.id_driver = pengguna.id WHERE (prefloc.location = '$pick_point' OR prefloc.location = '$dest_point') AND pengguna.nama = '$pref_driv' AND is_active = TRUE AND is_driver = TRUE";
					    $result_driver = $con->query($query_driver);

					    if ($row_driver = $result_driver->fetch(PDO::FETCH_NUM)) {
					        do {
					        	$id_driver = $row_driver[0];
					        	$profpic = $row_driver[1];
					        	$nama = $row_driver[2];
					        	$rating_n = 0;
					        	$rating_sum = 0;

					        	// tahap 2
					        	$query_rating="SELECT rating FROM pemesanan WHERE id_driver = '$id_driver'";
					    		$result_rating = $con->query($query_rating);

					    		if ($row_rating = $result_rating->fetch(PDO::FETCH_NUM)) {
					        		do {
					        			$rating_n++;
					        			$rating_sum += $row_rating[0];

					    			} while ($row_rating = $result_rating->fetch(PDO::FETCH_NUM));
					    		}
					    		// tahap 2_END

					        	$rating = $rating_sum / $rating_n;

					        	echo "<div class='choose-driver'>";
									echo "<div class='img'>";
										echo "<img src='img/" . $profpic . "' />";
									echo "</div>";
									echo "<div class='data'>";
										echo "<h3>" . $nama . "</h3>";
										echo "<span class='rating'>&#9734; " . number_format((float)$rating, 1, '.', '') . "</span> (" . number_format($rating_n, 0, '', ',') . " votes)";
										echo "<button class='choose-btn' name='id_driver' value='" . $id_driver . "' form='form-order-2'>I CHOOSE YOU!</button>";
									echo "</div>";
								echo "</div>";
					        } while ($row_driver = $result_driver->fetch(PDO::FETCH_NUM));
					    } else {
					    	echo "<div id='nothing'><p>Nothing to display :(</p></div>";
					    }
					    // tahap 1_END

					    $query_driver = null;
					    $result_driver = null;

					    $query_rating = null;
					    $result_rating = null;
					    $con = null;
					    /*END_CONNECT DB*/
					} else {
						echo "<div id='nothing'><p>Nothing to display :(</p></div>";
					}

					?>							
					<!-- END_DRIVER BERULANG -->

					</form>
				</div>

			</div>
			<div id="other_driv">
				<H2>OTHER DRIVERS:</H2>

				<div class="driver">

					<!-- DRIVER BERULANG -->
					<!-- <div class="choose-driver">
						<div class="img">
							<img src="https://vignette1.wikia.nocookie.net/kamenrider/images/e/ee/002_smartbrain1024_768.gif/revision/latest?cb=20120906190053" />
						</div>
						<div class="data">
							<h3>Bulbasaurus [CONTOH]</h3>
							<img src="" id="bintang"/><span class="rating">	&#9734;1.2</span> (10 votes)
							<button class='choose-btn' name='driver' value='123' form='form-order-2'>I CHOOSE YOU!</button>
						</div>
					</div> -->

					<?php
					/*CONNECT DB*/
					sql_connect('gojek_db');

					// tahap 1
				    $query_driver="SELECT pengguna.id, pengguna.profpic, pengguna.nama FROM prefloc INNER JOIN pengguna ON prefloc.id_driver = pengguna.id WHERE prefloc.location = '$pick_point' OR prefloc.location = '$dest_point' AND is_active = TRUE AND is_driver = TRUE";
				    $result_driver = $con->query($query_driver);

				    if ($row_driver = $result_driver->fetch(PDO::FETCH_NUM)) {
				        do {
				        	$id_driver = $row_driver[0];
				        	$profpic = $row_driver[1];
				        	$nama = $row_driver[2];
				        	$rating_n = 0;
				        	$rating_sum = 0;

				        	// tahap 2
				        	$query_rating="SELECT rating FROM pemesanan WHERE id_driver = '$id_driver'";
				    		$result_rating = $con->query($query_rating);

				    		if ($row_rating = $result_rating->fetch(PDO::FETCH_NUM)) {
				        		do {
				        			$rating_n++;
				        			$rating_sum += $row_rating[0];

				    			} while ($row_rating = $result_rating->fetch(PDO::FETCH_NUM));
				    		}
				    		// tahap 2_END

				        	$rating = $rating_sum / $rating_n;

				        	echo "<div class='choose-driver'>";
								echo "<div class='img'>";
									echo "<img src='img/" . $profpic . "' />";
								echo "</div>";
								echo "<div class='data'>";
									echo "<h3>" . $nama . "</h3>";
									echo "<span class='rating'>&#9734; " . number_format((float)$rating, 1, '.', '') . "</span> (" . number_format($rating_n, 0, '', ',') . " votes)";
									echo "<button class='choose-btn' name='id_driver' value='" . $id_driver . "' form='form-order-2'>I CHOOSE YOU!</button>";
								echo "</div>";
							echo "</div>";
				        } while ($row_driver = $result_driver->fetch(PDO::FETCH_NUM));
				    } else {
				    	echo "<div id='nothing'><p>Nothing to display :(</p></div>";
				    }
				    // tahap 1_END

				    $query_driver = null;
				    $result_driver = null;

				    $query_rating = null;
				    $result_rating = null;
				    $con = null;
				    /*END_CONNECT DB*/

					?>							

					<!-- END_DRIVER BERULANG -->

					</form>
				</div>

			</div>
		</div>