<?php
    session_start();
    $db = new mysqlI("localhost" , "root" , "" , "fineclix");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";
    
    $username = $_SESSION['username'];
    $sql = "DELETE FROM users1 WHERE usernamee = '$username'";
    mysqli_query($db,$sql);
    header("location: logout.php");
    
    $db->close();
?>