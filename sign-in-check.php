<?php

require ('config.php');
$username = mysqli_real_escape_string($conn, $_POST['userid']);
$password = strip_tags($_POST['password']);
$password = sha1($password);

if(isset($username) && isset($password) && !empty($username) && !empty($password))
{
    $sql = mysqli_query($conn, "SELECT username, email,  password FROM user WHERE (username = '$username' OR email = '$username') AND password = '$password'");

    //Check the number of users against database
    //with the given criteria.  We're looking for 1 so 
    //adding > 0 (greater than zero does the trick). 
    $num_rows = mysqli_num_rows($sql);
    
    if($num_rows > 0){
        //Lets grab and create a variable from the DB to register
        //the user's session with.
        $gid = mysqli_query($conn, "SELECT username, email,  password FROM user WHERE (username = '$username' OR email = '$username') AND password = '$password'");
        $row = mysqli_fetch_assoc($gid);
        $uid = $row['username'];
        
        // This is where we register the session.
        $_SESSION['username'] = $uid;

        //Send the user to the member page.  The userid is what the 
        //session include runs against.
        header('Location: home.php?username='.$uid);
    }
    //If it doesn't check out -- throw an error.
    else
    {
        echo "<script>alert('Informasi Login Invalid');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Informasi Login Invalid');window.location='index.php';</script>";
}
?>