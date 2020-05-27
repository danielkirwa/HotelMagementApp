<!DOCTYPE html>
<html>
<head>
	<title>Dining</title>
	<link rel="stylesheet" type="text/css" href="Hotelstyle.css">

	<script type="text/javascript" src="Hotel.js"></script>
	
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
					<li class="active"><a href="#">Order Meal</a></li>
					<li><a href="Rooms.php">Rooms</a></li>
					<li><a href="#">Halls</a></li>
					<li><a href="#">Camping</a></li>
					<li><a href="#">Tours tickets</a></li>
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
					<li><a href="#">Meals</a></li>
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
	<div id="columnleft">
		<h3><center><label style="color: blue ">Delivery <span style="color: teal"> mode </span></label></center></h3>
	</div>
	<div id="columnrightorder">
		
				<h1><center><label style="color: blue ">Your <span style="color: teal"> Order list </span> Check</label></center></h1><br>
			<table class="table table-striped">
			<thead>
				<tr>
				<th style="width: 25%;color: blue;">MEAL ITEM</th>
				<th style="width: 25%;color: teal;">QUANTITY</th>
				<th style="width: 25%;color: blue;">NET PRICE</th>
				<th style="width: 25%;color: teal;"></th>
			</tr>
			</thead>
			<tbody id="book-list">
				<tr>
				<td>Item one</td>
				<td>2</td>
				<td>Ksh 200</td>
				<td><a href="#"><b style="color: red">X</b></a></td>
			</tr>
			<tr>
				<td>Item two</td>
				<td>1</td>
				<td>Ksh 150</td>
				<td><a href="#"><b style="color: red">X</b></a></td>
			</tr>
			</tbody>
				
		</table>

	</div>
	<div id="divcontentorder">

		<h1><center><label style="color: blue;" >Select <sapn style="color: teal">your meal </sapn> Here </label></center></h1><br>
				<div><form id="book-form">
					<div id="form-group">
			<label>ITEM NAME </label><br>
			
			<input type="text" name="" id="item"><br>
			</div>
			<div id="form-group">
			<label>QUANTITY </label><br>
			<input type="text" name="" id="quantity"><br>
			</div>
			<div id="form-group">
			<label>PRICE </label><br>
			<input type="text" name="" id="price"><br>
			</div>
			<input type="submit" name="" value="Add Item" >
			</form></div>



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