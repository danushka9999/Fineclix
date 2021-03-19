<?php
    //to stop the access when someone enter the home.php as url (because this is aprofile page)
    function logged_in()
    {
        if($_SESSION['username']=='')
        {
            return true;
        }
        else{
            return false;
        }
    }//end of the fuction

    session_start();

    if(logged_in()){
        header("location:photographerlogin.php");

    }

    //create connection
    $db = new mysqlI("localhost" , "root" , "" , "fineclix");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";

    $username = $_SESSION['username'];
    $result = mysqli_query($db , "SELECT id,usernamee,emails,telephone,address FROM users1 WHERE usernamee='$username'");
    $retrive = mysqli_fetch_array($result);
    //print_r($retrive);//used to check
    $id=$retrive['id'];
    $user=$retrive['usernamee'];
    $email=$retrive['emails'];
    $tele=$retrive['telephone'];
    $add=$retrive['address'];
    $db->close();

    $db = new mysqlI("localhost" , "root" , "" , "fineclix");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";

    $username = $_SESSION['username'];
    if (isset($_POST['update_btn'])){

        //berfore set the variables just checked those are real escape strings
        $user = $db->real_escape_string($_POST['name']);
        $email = $db->real_escape_string($_POST['emails']);
        $telephone = $db->real_escape_string($_POST['telephone']);
        $address = $db->real_escape_string($_POST['address']);
        $password1 = $db->real_escape_string($_POST['psw']);
        $password2 = $db->real_escape_string($_POST['psw-repeat']);
    
         
        if ($password1 = $password2){
            //create user in the data base
            $password1 = md5($password1); //hash password before storing for security reasons
            $sql = "UPDATE users1 SET usernamee = '$user', emails = '$email', telephone = '$telephone', address = '$address', pass = '$password1' WHERE usernamee = '$username'";
            mysqli_query($db,$sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $user;
            header("location: logout.php"); //redirect to the home page
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
<title>Profile Update</title>

<style type="text/css">
#body-bg{
    background-color: #ddd;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

</style>
<link rel="stylesheet" href="css/joinourteam.css">


<script type="text/javascript" src="js/home.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body id="body-bg">
<h1 style='color:rgb(203, 30, 255)'>Fineclix Profile update</h1>
<div class="container" style='padding-top:10px;background-color:#fff;margin-top:20px;margin-bottom:20px;width:1200px;height:1100px;margin-left:auto;margin-right:auto;'>

    <h2 align='center'>Update You'r Profile <?php echo ucfirst($user)?></h2>
    <h3 align='center'>Data Base ID NO    :  <?php echo ($id)?></h3>
    <div class="joinourteam-1">

    <form method="post" action="update.php" style="border:1px solid #ccc">
        <div class="container">
          
          <hr>
          
          <h3 >Current Username   :  <?php echo ucfirst($user)?></h3>
          <label for="name"><b>New username</b></label></br>
          <input type="text" placeholder="New User Name" name="name" required>

          <h3 >Current Email      :  <?php echo ($email)?></h3>
          <label for="emails"><b>New Email</b></label></br>
          <input type="text" placeholder="Enter Email" name="emails" required>

          <h3 >Current Contact NO :  <?php echo ($tele)?></h3>
          <label for="telephone"><b>New Phone Number</b></label></br>
          <input type="text" placeholder="Enter Phone Number" name="telephone" required>

          <h3 >Current Address    :  <?php echo ucfirst($add)?></h3>
          <label for="address"><b>New Address</b></label></br>
          <input type="text" placeholder="Enter Address" name="address" required></br></br>
      
          <label for="psw"><b>New Password</b></label></br>
          <input type="password" placeholder="Enter Password" name="psw" id="id1" required></br>
      
          <label for="psw-repeat"><b>New Repeat Password</b></label></br>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="id2"required></br>

         

          
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
          
          
      
          <div class="clearfix">
            
            <button type="submit" class="signupbtn" name="update_btn"  onclick="callfunction()" onclick="submitted()">Update</button>
          </div>
        </div>
      </form>
</div>
    
    
    
    
    
    
    
    
    



</div>












</body>


</html>