<?php
   session_start();
   include_once 'config.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>eZBuy | category</title>
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
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="#">Log In</a></li>
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
<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['usname'])       //https://www.w3schools.com/php/php_sessions.asp
               && !empty($_POST['pwrd'])) {
        
        $username=$_POST['usname']; 
        $password=$_POST['pwrd'];

     
                    if ($username=='administrator' && $password=='admin@123') {
                       $_SESSION['logged_user']=$username;
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = $username;
                       header("location:adminDashboard.php");
                    }
                    else{
                      
                      $msg = 'Wrong username or password';
                        }
                    }

                  
                 
               
         ?>


    <center>
        <div class="form-style-6">
                 <h1>Administrator Login</h1>
                 <form method="POST" class="form1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>">
                     <input type="text" id="uname" name="usname" placeholder="username"><br>
                     <input type="password" id="pwd" name="pwrd" placeholder="password">
                     <br><br>
                     <input type="submit" id="login" name="login" value="Login">
                 </form>
             </div>
        <?php  echo $msg; ?><br>
            </center> 
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