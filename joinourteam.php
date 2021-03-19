<!DOCTYPE html>
<html>


<head>
<title>Fineclix - Join Our Team</title>

<link rel="stylesheet" href="css/joinourteam.css"><!--link the style sheet-->


<script type="text/javascript" src="js/home.js"></script><!--link the scripting sheet-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--mobile view-->



</head><!--Start of header-->
<body>

<div class="header">
  <a href="index.php"><img src="images/Fineclix.png"   class="logo"></a>
  <div class="header-right">
    <a class="offline"  href="index.php">Home</a>
    <a class="offline" href="login.html">Log in/Sign Up</a>
    <a class="offline" href="services.html">Services</a>
    <a class="offline" href="printalbum.html">Print and Services</a>
    <a class="offline" href="printalbum.html">About Us</a>
    <a class="offline" href="contactUs.html">Contact Us</a>
    <a class="active" href="joinourteam.php">Join Our Team</a>
    <div class="headeruser">
    <a href="myAccount.php" ><img src="images/user.png"   class="logo1"></a>
    </div>

    
  </div>
</div>
<!--end of header-->
<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li>Join our team</li>
</ul>
<!--Start of content-->
<div class="joinourteam-4">
    


    <div class="become">
        <h1 class="become-1">Beome a Fineclix</h1>
        <h1 class="become-1">Pro Today.</h1>
    </br>
        <p class="become-2">We connect professional photographers to local demands </p>
        <p class="become-2">and let them focus on what they love.

    </div>

    <a href="RequiredSkills.php" class="button-1">Required Skills</a>
    </br>
    <a href="photographerRegister.php" class="button-2">Sign Up and Register</a>
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



</div>




<hr class="line">
<!--Start of footer-->
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