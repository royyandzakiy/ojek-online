<html> 
<head>
	<title>Ojek Online - Order</title>
	
	<link type="text/css" rel="stylesheet" href="reset.css">
	<link type="text/css" rel="stylesheet" href="main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
	
	<div id="head">
		<div id="header">
			<h1 class="header"><span style="color:#1D7430;">PR</span>-<span style="color:#D50027;">OJEK</span></h1>
			<h4 class="header"><span style="color:#85A158;">wush... wush... ngeeeeeeng...</span></h4>
		</div>

		<div id="user">
			<h3 class="hi">Hi, <b>Royyan</b> !</h3>
			<h4 class="logout"><a href="#">Logout</a></h4>
		</div>
	</div>

	<div class="nav">
		<div class="navbar">
			<button class="navlinks" onclick="navChange(event, 1)" id="tab_default">ORDER
			</button><button class="navlinks" onclick="navChange(event, 2)" >PROFILE
			</button><button class="navlinks" onclick="navChange(event, 3)">HISTORY</button>
		</div>
	</div>

	<div id="main">	

		<div id="nav-1" class="navmain">		
			<h1>MAKE AN ORDER</h1>

			<div class="tab">
				<div class="tablinks active"><span class="num-circle">1.</span> Select Destination
				</div><div class="tablinks" ><span class="num-circle">2.</span> Select a Driver
				</div><div class="tablinks" ><span class="num-circle">3.</span> Complete your Order</div>
			</div>

			<!-- FORM ISIAN -->

				<div id="order-1" class="tabcontent">
					
					<form action="order-2.php" name="order-1" id="form-order-1" method="post">

						<table>
							<tbody>
								<tr>
									<td>Picking Point<span style="color:red;">*</span>
									</td><td><input type="text" name="pick_point" /></td>
								</tr>
								<tr>
									<td>Destination<span style="color:red;">*</span>
									</td><td><input type="text" name="dest_point" /></td>
								</tr>
								<tr>
									<td>Preferred Location
									</td><td><input type="text" name="prefloc" placeholder="(optional)" /><br /></td>
								</tr>
							</tbody>
						</table>
					
						<button type="submit" form="form-order-1" value="Submit">Submit</button>

					</form>
					
				</div>
		</div>

	</div>
	<script src="scripts/emptyCheck.js"></script>
	<script src="scripts/navChange.js"></script>
</body>
</html>