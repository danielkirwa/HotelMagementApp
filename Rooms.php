<?php 
 
extract($_POST);
 
 if (isset($check)) {
 	# code...
 	$dstart = strtotime($checkin);
 	$dend = strtotime($checkout);
 	$nrooms =  $roomselected;

 	$ddiff = $dend - $dstart;
 	$period = $ddiff / 86400;
 	$rate = 700;
 	$total = $period*$rate*$nrooms ;
 	$dis = 0.10;
 	$tdias = $total * $dis;
 	$netcost = $total - $tdias;

 	if ($nrooms > 0) {
 		# code...
 		header(".bookform3");
 		 	
 	}

 	
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="Hotelstyle.css">
 </head>
 <body>


	<div id="divwraper">
	<div id="divbanner">

		<img src="images\logo2.png" height="80px"  style="margin-left: 50px;">
	<center><a href="#" onclick="showlocation()" style="float: right; margin-top: -60px; margin-right: 50px;">Location</a></center>
	<div id="Location">
	<img src="images\Ourlocation.jpg" height="400px">

	<img src="images\images-3.png" height="60px" id="closelocation" onclick="closelocation()">
	
</div>
</div>
	<div id="divmenu" class="menubar">
		<ul>
			
			<li class="active"><a href="#">Bookings</a>

					<ul>
					<li><a href="#">Rooms</a></li>
					<li><a href="#">Halls</a></li>
					<li><a href="#">Camping</a></li>
					<li><a href="#">Tours tickets</a></li>
					<li><a href="OrderMeals.php">Order Meals</a></li>
					<li><div class="slider1">
		<figure>
			<div class="slide1">
					<img src="images\sliders\dining.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\camp.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\room1.jpg" height="149px" width="298" >
				</div>
				<div class="slide1">
					<img src="images\sliders\beach.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\tour0.jpg" height="149px" width="298">
				</div>
		</figure>
	</div></li>
				</ul>
			</li>
			<li><a href="Home.php">Home</a></li>
			<li><a href="#">Dinning</a>

					<ul>
					<li><a href="Dining.php">Meals</a></li>
					<li><a href="#">Entertainment</a></li>
					<li><a href="#">Games</a></li>
					<li><a href="#">Tours</a></li>
					<li><div class="slider1">
		<figure>
			<div class="slide1">
					<img src="images\sliders\dining.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\camp.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\room1.jpg" height="149px" width="298" >
				</div>
				<div class="slide1">
					<img src="images\sliders\beach.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\tour0.jpg" height="149px" width="298">
				</div>
		</figure>
	</div></li>
				</ul>
			</li>
			<li><a href="#">Events</a>

				<ul>
					<li><a href="#">Cinema</a></li>
					<li><a href="#">Consert</a></li>
					<li><a href="#">Entertainment</a></li>
					<li><a href="#">Games</a></li>
					<li><a href="#">Tours</a></li>
					<li><div class="slider1">
		<figure>
			<div class="slide1">
					<img src="images\sliders\dining.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\camp.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\room1.jpg" height="149px" width="298" >
				</div>
				<div class="slide1">
					<img src="images\sliders\beach.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\tour0.jpg" height="149px" width="298">
				</div>
		</figure>
	</div></li>
				</ul>

			</li>
			<li><a href="Weddings.php">Wedding</a></li>
			<li><a href="#">Meeting</a></li>
			<li><a href="#">Offers</a>
				<ul>
					<li><a href="#">Holodays</a></li>
					<li><a href="#">Weekends</a></li>
					<li><a href="#">Bootcamps</a></li>
					<li><a href="#">Vacations</a></li>
					<li><a href="#">Internship</a></li>
					<li>	<div class="slider1">
		<figure>
			<div class="slide1">
					<img src="images\sliders\dining.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\camp.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\room1.jpg" height="149px" width="298" >
				</div>
				<div class="slide1">
					<img src="images\sliders\beach.jpg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\tour0.jpg" height="149px" width="298">
				</div>
		</figure>
	</div></li>
				</ul>

			</li>
			<li><a href="#">About Us</a></li>
		</ul>
		

	</div>
	<div id="columnleft">left</div>
	<div id="columnright">right</div>
	<div id="divcontent">

		<div class="slider">
		<figure>
			<div class="slide">
					<img src="images\sliders\dining.jpg" height="400px" width="400px">
				</div>
				<div class="slide">
					<img src="images\sliders\camp.jpg"height="400px" width="400px">
				</div>
				<div class="slide">
					<img src="images\sliders\room1.jpg" height="400px" width="400px" >
				</div>
				<div class="slide">
					<img src="images\sliders\beach.jpg" height="400px" width="400px">
				</div>
				<div class="slide">
					<img src="images\room2.jpg" height="400px" width="400px" >
				</div>
		</figure>
	</div>
		<div class="bookingsform" id="bookform">
			 <center><label><h3>Selest your room and category :</h3></label></center>
 	<form method="post" id="bookform3">

 		<label>SELECT CITY :</label>
				<select>
					<option>KISUMU</option>
					<option>MOMBASA</option>
					<option>NAIRIBO</option>
					<option>ELDORET</option>
					
				</select><br><br>
				<label>Category :</label>
				<select>
					<option>Presidential</option>
					<option>High class</option>
					<option>Luxury</option>
					<option>Pride</option>
				</select>
				<label>No Rooms :</label>
				<input type="number" name="roomselected" value="<?php if($period<1) {echo " Error";}else{echo $nrooms;} ?>">
				<label>Adults  :</label>
				<input type="number" name="Adultroom" value="">
				<label>children :</label>
				<input type="number" name="childrenroom" value=""><br><br>
				<center><label><h3>Booking dates :</h3></label><br></center>
 		     <label>Check In :</label>
 		<input type="date" name="checkin" value="<?php echo $checkin; ?>">
 		<label>Check Out :</label>
 		<input type="date"  name="checkout" value="<?php echo $checkout; ?>">
 		<button name="check" id="buttoncheck" type="Submit">Check Rates</button>
 		<center><label><h3>Your Charges :</h3></label><br></center>
 		<label>Total Rooms : </label>
				<input type="text" name="bookedrooms" value="<?php if($period<1) {echo "Ksh : Error";}else{echo "$nrooms";} ?>">
 		
 		<label>Total Accepted Stay Time in Days : </label>
 		<input type="text" name="days" value="<?php if($period<1) {echo " Error";}else{echo "$period   Days";} ?>"><br><br>
 		<label>Current Cost : </label>
 		<input type="text" name="amount" value="<?php if($period<1) {echo "Ksh : Error";}else{echo "Ksh :   $total";} ?>">
 		<label>Total Disscount : </label>
				<input type="text" name="discont" value="<?php if($period<1) {echo "Ksh : Error";}else{echo "Ksh :   $tdias";} ?>">
				<label>Total Net Pay : </label>
				<input type="text" name="actualcost" value="<?php if($period<1) {echo "Ksh : Error";}else{echo "Ksh :   $netcost";} ?>"><br><br>

 		<center><label><h3>Fill in your personal details:</h3></label></center>
				<label>Email Addres</label>
				<input type="email" name="" ><br><br>
				<label>Phone Number :</label>
				<input type="tex" name="phone" ><br><br>
				<label>Your ID Number:</label>
				<input type="tex" name="">
				<label><i>Your ID number is your Booking Ticket Number </i></label><br><br>
				<button type="Submit" class="btnsubmit" name="btnsubmit">Submit </button>
 	</form>
 
		</div>


	</div>
	<div id="divsubfooter">

	
		
	</div>
	
	<div id="divfooter">
		<center>
		<label>&copy 2020 LUXURY HOTEL</label>
		</center>
	</div>

</div>

 </body>
 </html>