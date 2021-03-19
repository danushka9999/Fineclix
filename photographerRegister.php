
<?php

session_start();

//conect to the database
$db = new mysqlI("localhost" , "root" , "" , "fineclix");
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";

//when register button is clicked
if (isset($_POST['register_btn'])){

    //berfore set the variables just checked those are real escape strings
    $username = $db->real_escape_string($_POST['name']);
    $email = $db->real_escape_string($_POST['emails']);
    $telephone = $db->real_escape_string($_POST['telephone']);
    $address = $db->real_escape_string($_POST['address']);
    $password1 = $db->real_escape_string($_POST['psw']);
    $password2 = $db->real_escape_string($_POST['psw-repeat']);

     
    if ($password1 = $password2){
        //create user in the data base
        $password1 = md5($password1); //hash password before storing for security reasons
        $sql = "INSERT INTO users1(usernamee,emails,telephone,address,pass) VALUES('$username' , '$email' , '$telephone' ,'$address', '$password1')";
        mysqli_query($db,$sql);
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location: home.php"); //redirect to the home page
    }
    else{
        $_SESSION['message'] = "The rwo passwords are not match";
    }
}
$db->close();
?>

<!DOCTYPE html>
<html>


<head>
<title>Fineclix - Sign Up and Register</title>

<link rel="stylesheet" href="css/joinourteam.css">


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
    <a class="active" href="joinourteam.php">Join Our Team</a>
    <div class="headeruser">
    <a href="myAccount.php" ><img src="images/user.png"   class="logo1"></a>
    </div>

    
  </div>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="joinourteam.php">Join our team</a></li>
  <li>Sign Up and Register</li>
</ul>
<br>


<div class="joinourteam-1">

    <form method="post" action="photographerRegister.php" style="border:1px solid #ccc">
        <div class="container">
          <h1>Sign Up and Register for Photographer</h1>
          <p>Please fill in this form to join us.</p>
          <hr>
          

          <label for="name"><b>username</b></label></br>
          <input type="text" placeholder="Username for new account" name="name" required></br>

          <label for="emails"><b>Email</b></label></br>
          <input type="text" placeholder="Enter Email" name="emails" required></br>

          <label for="telephone"><b>Phone Number</b></label></br>
          <input type="text" placeholder="Enter Phone Number" name="telephone" required></br>

          <label for="address"><b>Address</b></label></br>
          <input type="text" placeholder="Enter Address" name="address" required></br>
      
          <label for="psw"><b>Password</b></label></br>
          <input type="password" placeholder="Enter Password" name="psw" id="id1" required></br>
      
          <label for="psw-repeat"><b>Repeat Password</b></label></br>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="id2"required></br>

         

          
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
          
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" name="register_btn"  onclick="callfunction()" onclick= "validatePassword()">Sign Up</button>
          </div>
        </div>
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
    <a href="joinourteam.php" class="active">Join our team</a>
    <a href="photographerlogin.php">Photographer Login</a>
    
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
    
  </div>
  <hr class="line2">


</div>


</body>


</html>