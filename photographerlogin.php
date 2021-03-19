<?php

    session_start();

    //conect to the database
    $db = new mysqlI("localhost" , "root" , "" , "fineclix");
    if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";

    if (isset($_POST['login_btn'])){

        $username = $db->real_escape_string($_POST['name']);
        $password1 = $db->real_escape_string($_POST['psw']);
        $checkbox = isset($_POST['remember']);
         
        $password1 = md5($password1); //beacuse we hashed the password in registering
        $sql = "SELECT * FROM users1 WHERE usernamee = '$username' AND pass = '$password1'";
        $result = mysqli_query($db , $sql);
        
        if (mysqli_num_rows($result) == 1) {
          $_SESSION['message'] = "You are now logged in";
          $_SESSION['username'] = $username;
          header("location: home.php"); //redirect to home page 

        }
        else{
          $_SESSION['message'] = "Username/password combination incorrect";
        }
    }
    $db->close();
?>

<!DOCTYPE html>
<html>


<head>
<title>Fineclix - Photographer login</title>


<link rel="stylesheet" href="css/photographerlogin.css">
<script type="text/javascript" src="js/home.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>

<div class="header">
  <a href="index.php" ><img src="images/Fineclix.png"   class="logo"></a>
  <div class="header-right">
    <a class="offline"  href="index.php">Home</a>
    <a class="offline" href="login.html">Log in/Sign Up</a>
    <a class="offline" href="services.html">Services</a>
    <a class="offline" href="printalbum.html">Print and Services</a>
    <a class="offline" href="about.html">About Us</a>
    <a class="offline" href="contactUs.html">Contact Us</a>
    <a class="offline" href="joinourteam.php">Join Our Team</a>
    <div class="headeruser">
    <a href="myAccount.php" ><img src="images/user.png"   class="logo1"></a>
    </div>

    
  </div>
  
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li>Photographer login</li>
</ul>



<div class="login">

  <div class="hrequired-1">

    <h1>Photographer Login</h1>
    

  </div>
  <div class="hrequired-22">

    <p>Welcome back, sign in to access jobs and other features.</p>
    

  </div>
  <form action="photographerlogin.php" method="post" style="border:1px solid #ccc">
  <div class="hrequired-333">
    <label for="name"><b>username</b></label>
    <input type="text" placeholder="Username" name="name" required>
      
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="id1" required></br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Keep me logged in
    </label>
    <button type="submit" name="login_btn" class="logintofineclix" >Log in to Fineclix</button>

    
          
      
    

  </div>
  </form>
  <center><p>Not a Fineclix Pro yet? </p><a href="joinourteam.php" class="link-1">Apply here</a></center>
  <center><a href="#" class="link-1" onclick="checkemail()">Forgot Password?</a></center>


  </div>


  <button class="open-button" onclick="openForm()">Chat With Us</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h3>Feel Free to Express Your Desire</h3>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Hi how can we help you...." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>




<hr class="line">

<div class="footer">
  <div class="verticalDiscover">
    
    <h3>Discover</h3>
    <a href="#">Customer Stories</a>
    <a href="servicesForm.html">Gift a photoshoot</a>
    <a href="pricing.php">Pricing</a>
    <a href="#">Review</a>
  </div>
  <div class="verticalPhotographer">
    
    <h3>Photographer?</h3>
    <a href="joinourteam.php">Join our team</a>
    <a href="photographerlogin.php" class="active">Photographer Login</a>
    
  </div>
  <div class="verticalCompany">
    
    <h3>Company</h3>
    <a href="about.html">About Us</a>
    <a href="contactUs.html">Contact Us</a>
    
  </div>
  <div class="verticalNeedHelp">
    
    <h3>Need Help?</h3>
    <a href="#">+774020028</a>
    <p class="opentime">Mon-Fri 9.30am-7.00pm sat-sun 11.30am-5.00pm</p>
    
    
  </div>
  <div class="footerlogos">
    
    <a href="https://www.certify.com/" ><img src="images/certified.png"   class="logo2"></a>
    <a href="https://www.paypal.com/lk/home" ><img src="images/payment.png"   class="logo3"></a>
    
  </div>
  <hr class="line1">
  <div class="footercompanylogo">
  <a href="index.php" ><img src="images/Fineclix.png"   class="logo4"></a>
  <p class="create">Created by MLB_PG.04.02_07</p>
  </div>
  <div class="footersocialmedialogos">
    
    <a href="https://www.facebook.com/" ><img src="images/facebook.png"   class="logo5"></a>
    <a href="https://twitter.com/" ><img src="images/twitter.png"   class="logo6"></a>
    <a href="https://www.instagram.com/" ><img src="images/instagram.png"   class="logo7"></a>
    <a href="https://www.youtube.com/" ><img src="images/youtube.png"   class="logo8"></a>
    <!--<button onclick="backtopfunction()" id="backtop" title="Go to top">GO to Top</button>-->
    
  </div>
  <hr class="line2">


</div>


</body>


</html>