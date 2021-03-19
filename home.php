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
    //call the looged_in function
    if(logged_in()){
        header("location:photographerlogin.php");

    }
    
    $db = new mysqlI("localhost" , "root" , "" , "fineclix");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";

    //to fetch all the database data below going to make a query
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
?>


<!DOCTYPE html>
<html>


<head>
<title>Photographer Interface</title>

<style type="text/css">
#body-bg{
    background-color: #ddd;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.btna{
    color: white;
    text-align: center;
    text-decoration: none;
    background-color:blueviolet;
    float:right;
    width: 180px;
    border-radius: 12px;
    border: none;
    padding: 15px 32px;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-top:20px;
}
.logo{
    display:block;
    margin-left: auto;
    margin-right: auto;
    width:200px;

}
}
</style>


<script type="text/javascript" src="js/home.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body id="body-bg">
<h1 style='color:rgb(203, 30, 255)'>Fineclix Photographer Interface</h1>
<div class="container" style='padding-top:10px;background-color:#fff;margin-top:20px;margin-bottom:20px;width:1200px;height:640px;margin-left:auto;margin-right:auto;'>

    <h2 align='center'>Welcome <?php echo ucfirst($user)?></h2>
    <h2 align='center' style='color:rgb(203, 30, 255)'>Profile</h2>
    <img  src="images/user1.png"   class="logo">
    <center>
    <h3 >Username        :  <?php echo ucfirst($user)?></h3>
    <h3 >Data Base ID NO :  <?php echo ($id)?></h3>
    <h3 >Email           :  <?php echo ($email)?></h3>
    <h3 >Contact NO      :  <?php echo ($tele)?></h3>
    <h3 >Address         :  <?php echo ucfirst($add)?></h3>
    </center>
    <a class="btna" href="logout.php">Logout</a>
    <a class="btna" href="update.php">Update Profile</a>
    <a class="btna" href="delete.php">Delete My Account</a>
    
    



</div>












</body>


</html>