<?php 
  include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eZBuy</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/category.css">
  <link rel="stylesheet" type="text/css" href="Styles/form1.css">
    <script src="Scripts/register.js"></script>
</head>
<body>
  <div class="container">
  	<div class="navbar">
  	  <div class="logo">
  	  	<center><a href="index.php"><img src="Images/logo1.png" width="250px"></a></center>
  		<nav class="top">
  			<ul>
  				<li><a href="index.php">Home</a></li>
  				<li><a href="#">Sign Up</a></li>
  				<li><a href="login.php">Log In</a></li>
  				<li><a href="contactUs.php">Help</a></li>
  			</ul><br>
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
    <center> 
            <h2> Registration Form</h2> <!-- reffered from labsheets-->
         </center>
        <form class="form1" action="submitRegistration.php" method="POST" onsubmit="return checkPassword()">
            <label for="fname">First name:</label><br>
            <input type="text" placeholder="First Name" name="fname" required><br>
            <label for="lname">Last name:</label><br>
            <input type="text" placeholder="Last Name" name="lname" required><br><br>

            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="Male" checked> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other <br/><br>

            Mobile number : <br/>
            <input type="phone" name="mobile" pattern="[0-9]{10}" placeholder="0712345678" required><br/><br>

            Email Address : <br/>
            <input type="email" name="email" pattern="[a-z0-9.-+_%]+@[a-z0-9.-]+\.[a-z]{2,3} " placeholder="example@gmail.com" required><br/><br>

            Address : <br/>
            <textarea name="address" rows="8" cols="50" required></textarea><br/><br>

            Date Of Birth : <br/>
            <input type="date" name="dob"  required><br/><br>

            <label for="username">Username:</label><br>
            <input type="text" placeholder="Username" name="uname" pattern="{5,15}"required><br><br>

            Password : <br>
            <input type="password" name="pwd" id="pwd" pattern="(!@#$%^&*?/\)(?=.+[a-z])(?=.+[A-Z]).{5,15}" required><br/>
            Re-Enter Password : <br>
            <input type="password" name="cnfrmpwd" id="cnfrmpwd" pattern="(!@#$%^&*?/\)(?=.+[a-z])(?=.+[A-Z]).{5,15}" required><br/><br/>

            <input type="checkbox" class="inputStyle" id="checkbox" onclick="enableButton()">Accept Privacy Policy and Terms.<br/>

            <center>
                <input type="submit" id="submitBtn" value="submit" disabled >
            </center>
        </form>
  

    <div>
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