<?php 
  include_once 'config.php';
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eZBuy | Online Shopping Mall</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<link rel="stylesheet" type="text/css" href="Styles/home.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="Scripts/homejs.js"></script>
</head>
<body>
  <div class="container">
  	<div class="navbar">
  	  <div class="logo">
  	  	<center><a href="index.php"><img src="Images/logo1.png" width="250px"></a></center>
  		<nav class="top">
  			<?php if(isset($_SESSION['username'])){             
          echo '<h2 id="head">Hi! , '.$_SESSION['username'].'</h2>
  			<ul>
  				<li><a href="index.php">Home</a></li>
  				<li><a href="logout.php">Logout</a></li>
  				<li><a href="sellerRequestForm.php">Become a seller</a></li>
  				<li><a href="contactUs.php">Help</a></li>
  				<li><a href="cart.php">My Cart</a></li>
  			</ul><br>';
  			if($_SESSION['username']=='administrator'){
          	echo '<ul><li><a href="adminDashboard.php" class="admin">Admin Dashboard</a></li></ul><br>';
          }

  			}

  				else{
  	     echo '<ul><li><a href="index.php">Home</a></li>
  				<li><a href="register.php">Sign Up</a></li>
  				<li><a href="login.php">Log In</a></li>
  				<li><a href="contactUs.php">Help</a></li>
  			</ul><br>' ;
        } ?>

  			
  			  <form method="GET" action="/action_page.php">
     		    <input  class="navigation" type="text" placeholder="Search.." name="search" >
      		  <button class="navigation" type="submit"><i class="fa fa-search"></i></button>
    		  </form>
  		</nav>
  	  </div>
  	      <div align="center">		
			        <button class="category" id="gym" onclick="window.location.href='category.php? categoryId=CA01'">Sports&Gym</button>
			        <button class="category" id="fashion" onclick="window.location.href='category.php? categoryId=CA02'">Fashion</button>
			        <button class="category" id="kids" onclick="window.location.href='category.php? categoryId=CA03'">Kids&Toys</button>
			        <button class="category" id="groceries" onclick="window.location.href='category.php? categoryId=CA04'">Groceries</button>
		        	<button class="category" id="beauty" onclick="window.location.href='category.php? categoryId=CA05'">Health&Beauty</button>
		        	<button class="category" id="electronics" onclick="window.location.href='category.php? categoryId=CA06'">Electrical Items</button>
			        <button class="category" id="pharmacy" onclick="window.location.href='category.php? categoryId=CA07'">Pharmaceutical</button>
			        <button class="category" id="books" onclick="window.location.href='category.php? categoryId=CA08'">Books</button>

			        <br>
		      </div>
		      <hr class="new1">
    </div>

	<div>		
		

		<h2 id="Home">Home<h2>
			<br><br>
		<h3 id="late_head">Latest Items</h3>
			<br><br>
			
		<table border="1" class="table01">
			<tr>
				<td><a href="jordan.php"><img src="Images/jordan.jpg" alt="Item1" class="Latest" id="l1" ></a></td>
				<td><a href="fancy.php"><img src="Images/fancy.jpg" alt="Item2" class="Latest" id="l2" ></a></td>
				<td><a href="jersey.php"><img src="Images/psg3.png" alt="Item3" class="Latest" id="l3" ></a></td>
				<td><a href="grain.php"><img src="Images/grain.jpg" alt="Item4" class="Latest" id="l4" ></a></td>
			</tr>
			<tr class="Latest_details">
				<td class="Latest_details">Red and Black Jordan One</td>
				<td class="Latest_details">Fancy Brown Broug Shoes</td>
				<td class="Latest_details">2021/2022 PSG Thrid Jersey</td>
				<td class="Latest_details">Kellogg's Nutri Grain</td>
			</tr>
			<tr >
				<td class="Latest_details">Rs. 35000</td>
				<td class="Latest_details">Rs.6450</td>
				<td class="Latest_details">Rs.25000</td>
				<td class="Latest_details">Rs.380</td>
			</tr>
		</table>
	</div>
	<div>
			<br><br>
		<table  border="1" width="100%" id="home_table"  class="table01">

		<tr>
			<th class="tablehead" colspan="3">Sports & Gym</th>
			<th class="tab2"></th>
			<th class="tablehead" colspan="3">Kids & Toys</th>
		</tr>

		<tr>	
			<td class="tab1" ><a href="moreDetails.php? ItemName='Euro 2020 Replica Ball'"><img src="Images/sng1.jpg" alt="Item5" class="subpics"></a></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Dumbell'"><img src="Images/sng2.jpg" alt="Item6" class="subpics"></a></td>
			<td class="tab2" ><button class="viewmore" onclick="window.location.href='category.php? categoryId=CA01'">View More...</button></td>
      <td class="tab2"></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Lego City Edition'"><img src="Images/knt1.jpg" alt="Item7" class="subpics"></a></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Teddy Bear Brown'"><img src="Images/knt2.jpg" alt="Item8" class="subpics"></a></td>
			<td class="tab2"><button class="viewmore" onclick="window.location.href='category.php? categoryId=CA03'">View More...</button></td>
		</tr>
		<tr>
			<td class="tab3">Euro 2020 Replica Ball</td>
			<td class="tab3">Dumbell</td>
			<td class="tab2"></td>
			<td class="tab2"></td>
			<td class="tab3">Lego City Edition</td>
			<td class="tab3">Teddy Bear Brown</td>
			<td class="tab2"></td>
		</tr>
		<tr><td class="tab3">Rs.2890</td>
			<td class="tab3">Rs.1200</td>
			<td class="tab2"></td>
			<td class="tab2"></td>
			<td class="tab3">Rs.8900</td>
			<td class="tab3">Rs.2500</td>
			<td class="tab2"></td>
		</tr>			
		<tr>
			<th class="tablehead" colspan="3">Fashion</th>
			<th class="tab2"></th>
			<th class="tablehead" colspan="3">Health & Beauty</th>

		</tr>
		
		<tr>
			<td class="tab1"><a href="moreDetails.php? ItemName='Kylie Jenner Lip Gloss'"><img src="Images/fash1.jpg" alt="Item9" class="subpics"></a></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Fenty Foundation'"><img src="Images/fash2.jpg" alt="Item10" class="subpics"></a></td>
			<td class="tab2"><button class="viewmore" onclick="window.location.href='category.php? categoryId=CA02'">View More...</button></td>
			<td class="tab2"></td>	
			<td class="tab1"><a href="moreDetails.php? ItemName='Dove Conditioner'"><img src="Images/bnh1.jpg" alt="Item11" class="subpics"></a></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Kumarika Hair Oil'"><img src="Images/bnh2.jpg" alt="Item12" class="subpics"></a></td>
			<td class="tab2"><button class="viewmore" id="hnb" value="beauty" onclick="window.location.href='category.php? categoryId=CA05'">View More...</button></td>
		</tr>
		<tr>
			<td class="tab3">Kylie Jenner Lip Gloss</td>
			<td class="tab3">Fenty Foundation</td>
			<td class="tab2"></td>
			<td class="tab2"></td>
			<td class="tab3">Dove Conditioner</td>
			<td class="tab3">Kumarika</td>
			<td class="tab2"></td>
		</tr>
		<tr>
			<td class="tab3">Rs.1890</td>
			<td class="tab3">Rs.1750</td>
			<td class="tab2"></td>
			<td class="tab2"></td>
			<td class="tab3">Rs.320</td>
			<td class="tab3">Rs.120</td>
			<td class="tab2"></td>
		</tr>
		<tr>
			<th class="tablehead" colspan="3">Groceries</th>
			<th width="80px"></th>
			<th class="tablehead" colspan="3">Electrical Items</th>
		</tr>

		<tr>
			<td class="tab1"><a href="moreDetails.php? ItemName='Heinz-Beinz'"><img src="Images/groc1.jpg" alt="Item13" class="subpics"></a></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Comfort Fabric Conditioner'"><img src="Images/groc2.jpeg" alt="Item14" class="subpics"></a></td>
			<td class="tab2"><button class="viewmore" onclick="window.location.href='category.php? categoryId=CA04'">View More...</button></td>
			<td class="tab2"></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Beats Headphones'"><img src="Images/elec1.jpg" alt="Item15" class="subpics"></a></td>
			<td class="tab1"><a href="moreDetails.php? ItemName='Room LED Set'"><img src="Images/ele2.jpg" alt="Item16" class="subpics"></a></td>
			<td class="tab2"><button class="viewmore" onclick="window.location.href='category.php? categoryId=CA06'">View More...</button></td>
		</tr>
		<tr>
			<td class="tab3">Heinz Baked Beans</td>
			<td class="tab3">Comfort</td>
			<td class="tab2"></td>
			<td class="tab2"></td>
			<td class="tab3">Beats Headset</td>
			<td class="tab3">Room LED set</td>
			<td class="tab2"></td>
		</tr>
		<tr>
			<td class="tab3">Rs.690</td>
			<td class="tab3">Rs.320</td>
			<td class="tab2"></td>
			<td class="tab2"></td>
			<td class="tab3">Rs.12590</td>
			<td class="tab3">Rs.2600</td>
			<td class="tab2"></td>
		</tr>
		</table>
	</div>

		<br>
		
	 <footer>
      	<hr class="new1"><nav class="foot">
      	  <ul class="foot">
  				<li><a href="index.php">Home</a></li>
  				<li><a href="promotions.php">Promotions</a></li>
  				<li><a href="aboutUs.php">About Us</a></li>
  				<li><a href="contactUs.php">Contact Us</a></li>
  			</ul></nav>
      	<hr class="new1">
        <table class="t1" width="100%">
          <tr>
            <th>Online Shopping Mall</th>
            <th >Find Shops</th>
            <th>More</th>
          </tr>
          <tr>
            <td>
              <li>Promotion</li>
              <li>About Us</li>
              <li>Contact Us</li>
              <li>Category</li>
            </td>
            <td style="border-right: solid 1px grey; border-left: solid 1px grey;">
              <div class="fut">
              <li><a href="https://www.ithaka.travel/blog/places-to-shop-in-sri-lanka/">Fashion House</a></li>
             <li><a href="https://list.ly/list/2PX8-top-5-supermarkets-near-colombo-five-of-the-best-supermarkets-in-and-around-colombo">City Food</a></li>
             <li><a href="https://www.facebook.com/sephoramakeupstoresrilanka/">Sephora</a></li>
             <li><a href="https://www.nike.com/retail/s/nike-colombo">Nike</a></li>
             <li><a href="http://www.willsdesign.lk/">Wills Design</a></li>
             <li><a href="https://www.healthguard.lk/">City Food pharmacy</a></li>
             <li><a href="https://www.sarasavi.lk/">Sarasavi</a></li>
             <li><a href="index.php">Other</a></li></div>
            </td>
            <td><center>
              <a href=""><img src="Images/youtube.png" alt="Youtube"></a>
              <a href=""><img src="Images/fb.png" alt="Facebook"></a><br><br>
              <a href=""><img src="Images/twitter.png" alt="Twitter"></a>
              <a href=""><img src="Images/whatsapp.png" alt="Whatsapp"></a></center>
            </td>
          </tr>
        </table>
      </footer>
  </div>  
      
</body>
</html>