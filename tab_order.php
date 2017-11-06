<h1>MAKE AN ORDER</h1>

<div class="tab">
	<div class="tablinks active"><span class="num-circle">1</span> Select Destination
	</div><div class="tablinks" ><span class="num-circle">2</span> Select a Driver
	</div><div class="tablinks" style="margin:0px;"><span class="num-circle">3</span> Complete your Order</div>
</div>

<!-- FORM ISIAN -->

	<div id="order-1" class="tabcontent">
		
		<form action="order-1-check.php" name="order-1" id="form-order-1" method="post">
		<form name="order-1" id="form-order-1" >

			<table>
				<tbody>
					<tr>
						<td>Picking Point
						</td><td><input type="text" size="27" name="pick_point" id="pick_point" /></td>
					</tr>
					<tr>
						<td>Destination
						</td><td><input type="text" size="27" name="dest_point" id="dest_point" /></td>
					</tr>
					<tr>
						<td>Preferred Driver
						</td><td><input type="text" size="27" name="pref_driv" id="pref_driv" placeholder="(optional)" /><br /></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" value="Submit">NEXT</button>

		</form>
		
	</div>