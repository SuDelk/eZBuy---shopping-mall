<?php 
	session_start();
  include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eZBuy | promotions</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/promo.css">
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
    <!-- App slide show --> <br><br>
    <h1><center>PROMOTIONS</center></h1>
	<section class="slide-show"> <!-- https://www.youtube.com/watch?v=0wvrlOyGlq0&ab_channel=CodingSnow--> 
		<div class="slider">
		   <div class="slide active" style="background-image: url('Images/slides/fashion.jpg')">
			   <div class="container">
				   <div class="caption">
					   <h1>Fashion</h1>
					   <p>Go anywhere. Wear Smart.</p>
					   <a href="category.php? categoryId=CA02" style="background-color: #ec2724;">More...</a>
				   </div>
			   </div>
		   </div>
		   <div class="slide" style="background-image: url('Images/slides/sport.jpg')">
			   <div class="container">
				   <div class="caption">
					   <h1>Sports & Gym</h1>
					   <p>Follow the passion</p>
					   <a href="category.php? categoryId=CA01" style="background-color: #ec2724;">More...</a>
				   </div>
			   </div>
		   </div>
		   <div class="slide" style="background-image: url('Images/slides/toys.jpg')">
			   <div class="container">
				   <div class="caption">
					   <h1>Toys</h1>
					   <p>Happy Kids. Happy Life</p>
					   <a href="category.php? categoryId=CA03" >More...</a>
				   </div>
			   </div>
		   </div>
		   <div class="slide" style="background-image: url('Images/slides/beauty.jpg')">
			<div class="container">
				<div class="caption">
					<h1>Health & Beauty</h1>
					<P>Confidence is the KEY</p>
					<a href="category.php? categoryId=CA05" >More...</a>
				</div>
			</div>
		</div>
		<div class="slide" style="background-image: url('Images/slides/books.jpg')">
			<div class="container">
				<div class="caption">
					<h1>Books</h1>
					<p>Reading makes you perfect</p>
					<a href="category.php? categoryId=CA08" style="background-color: white; color: black;">More...</a>
				</div>
			</div>
		</div>
		</div>
	  
	   <!-- controls  -->
	   <div class="controls">
		   <div class="prev">&#10094;</div>
		   <div class="next">&#10095;</div>
	   </div>
   
	   <!-- indicators -->
	   <div class="indicator">
	   </div>
   
	 </section>
	 <script src = "Scripts/catslider.js"></script>

	
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
		<center>
			<img src="Images/pormo2.jpg" alt="promo2 image" class="mainImage"> <!-- done by : IT2 -->
			<img src="Images/promo6.jpg" alt="promo6 image" class="mainImage">
			<br>
			<img src="Images/promo7.jpg" alt="promo6 image" class="banner">
		
		<hr>
		<br><br><br>
		<div class="imgFooter">
			<a href="category.php? categoryId=CA02"><img src="Images/promo1.jpg" alt="" class="image"></a> 
			<a href="category.php? categoryId=CA01"><img src="Images/promo3.png" alt="" class="image"></a> 
			<a href="category.php? categoryId=CA02"><img src="Images/promo4.jpg" alt="" class="image"></a> 
			<a href="index.php"><img src="Images/promo5.jpg" alt="" class="image"></a> 
		</div>
		</center>
	</div>

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
             <li><a href="https://www.facebook.com/sephoramakeupstoresrilanka/">Sephora
             <li><a href="https://www.nike.com/retail/s/nike-colombo">Nike
             <li><a href="http://www.willsdesign.lk/">Wills Design</a></li>
             <li><a href="https://www.healthguard.lk/">City Food pharmacy</a></li>
             <li><a href="https://www.sarasavi.lk/">Sarasavi
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





 