<?php 
extract($_POST);
 if (isset($check)) {
 	# code...
 	$dstart = strtotime($checkin);
 	$dend = strtotime($checkout);
 	$ddiff = $dend - $dstart;
 	$period = $ddiff / 86400;
 	$rate = 3000;
 	$total = $period*$rate;
 }

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/Hotelstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/banner.css">
	<script type="text/javascript" src="scripts/Hotel.js"></script>
	
</head>
<body>
<div id="divwraper">
	<div id="divbanner">

		<img src="images\logo2.png" height="80px"  style="margin-left: 50px;">
	<center><a href="#" onclick="showlocation()" style="float: right; margin-top: -60px; margin-right: 50px;">Location</a></center>
	<div id="Location">
	<img src="images\Ourlocation.jpg" height="400px">

	<img src="images\images-3.png" height="60px" id="closelocation" onclick="closelocation()">
	<div class="nairobiinfor">
		
		<h3 >NAIROBI</h3><br>
		CALL  : 0791958878<br>
		EMAIL : nairobi@gmail.com<br>
		<h3 >MOMBASA</h3><br>
		CALL  : 0791958878<br>
		EMAIL : mombasa@gmail.com<br>
		<h3 >KISUMU</h3><br>
		CALL  : 0791958878<br>
		EMAIL : kisumu@gmail.com<br>
	</div>
	
	
</div>
</div>
	<div id="divmenu" class="menubar">
		<ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Bookings</a>

					<ul>
					<li><a href="Rooms.php">Rooms</a></li>
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
					<li><a href="#">Meeting</a></li>
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
					<img src="images\sliders\images7 (4).jpeg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\images4 (4).jpeg" height="149px" width="298">
				</div>
				<div class="slide1">
					<img src="images\sliders\download-2.jpg" height="149px" width="298" >
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
			<li><a href="About.html">About Us</a></li>
		</ul>
		
		<label>BookRoom <a href="##" onclick="openbooking()"> now here</a></label>

	</div>
	<div id="columnleft" style="background: red">
		<h3 style="color: #4caf50">NAIROBI</h3>
		<P>We offer the best service and accomodation to all our customer with us we got you coverd experience the high class amd luxurious Hotle of honour</P>
		<img src="images\images3 (4).jpeg" width="95%">
		<p>Experience a prestigious residence with us</p>
		<h3 style="color: #4caf50">MOMBASA</h3>
		<P>Specificaly located at the beach with the natural beauty of the place.You get to experience a lifetime moment with the greate shore of the Ocean</P>
		<img src="images\hotel.jpg" width="95%">
		<p>Come see the world we got it right here with us for you

		</p>

	</div>
	<div id="columnright" style="background: blue">

		<br><br><br>
		<h4 style="color: #4f7f50">OUR CONNECT TEAM </h4>
		<P>Get connected with our to experience the world though our varst range of activities <br>
			<ul style="color: teal">
				<li><a href="#">TOURISM</a> </li>
				<li><a href="#">COMMUNITY BUILDING</a></li>
				<li><a href="#">BOOTCAMPS</a></li>
				<li><a href="#">ENVIRONMENT CONSERVATION</a></li>
			</ul>
		</P>
		<h4 style="color: #4f7f50">OUR STAFF </h4>
		<P>Meet our dedicated staff members always ready to server the best ond in a special way where proffesionalism is brought to your in your way  <br>
			<ul style="color: teal">
				<li><a href="#">Dining staff</a> </li>
				<li><a href="#">kitchen staff</a></li>
				<li><a href="#">Boardrooms staff</a></li>
				
			</ul>
			
		</P>
	</div>
	<div id="divcontent" style="background: teal">

		<div class="slider">
		<figure>
			<div class="slide">
					<img src="images\sliders\images7 (4).jpeg" height="400px" width="400px">
				</div>
				<div class="slide">
					<img src="images\sliders\room2.jpg" height="400px" width="400px" >
				</div>
				<div class="slide">
					<img src="images\sliders\images4 (4).jpeg"height="400px" width="400px">
				</div>
				
				<div class="slide">
					<img src="images\sliders\images12 (4).jpeg" height="400px" width="400px">
				</div>
				<div class="slide">
					<img src="images\sliders\images13 (4).jpeg" height="400px" width="400px"  >
				</div>
		</figure>
	</div>

		
		
		<label><b>hellow</b></label><br>
		

	</div>
	<div id="divsubfooter">

	
		
	</div>
	
	<div id="divfooter">
		<center>
		<label>&copy 2020 LUXURY HOTEL</label>
		</center>
	</div>

</div>

<div class= "popupbooknow" id="bookform">
	<form class= "formcontainer">
		
		<h3>Book your room withus </h3><br>
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
				
				<label>Adults  :</label>
				<input type="number" name="">
				<label>children :</label>
				<input type="number" name="">
				
				<label>Checkin</label>
				<input type="Date" name="Checkin">
				<label>Checkout</label>
				<input type="Date" name="Checkout"><br><br>
				<label>Email Addres</label>
				<input type="email" name="">
				<label>Phone Number :</label>
				<input type="tex" name="" required="">
				<label>Your ID Number:</label>
				<input type="tex" name="" required=""><br>
				
				<button type="submit" > Check Retas </button><br>
				<label>Total Rooms : </label>
				<input type="text" name="">
				<label>Current Cost : </label>
				<input type="text" name="">
				<label>Total Accepted Stay Time in Days : </label>
				<input type="text" name="" value="<?php echo $period ?>"><br><br>
				<label>Total Disscount : </label>
				<input type="text" name="" >
				<label>Total Net Pay : </label>
				<input type="text" name="" value="<?php echo $total ?>"><br><br>
				

		<button type="submit" class="btnsubmitpopup">SUBMIT</button>
		<button type="submit" class="btncancelpopup" onclick="closebooking()">CANCEL</button>

	</form>
	
</div>


</body>
</html>
