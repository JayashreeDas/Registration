<?php
require 'db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "inside if";
    $userName=$_POST['userName'];
    $password=md5($_POST['password']);
      
    

    $sql="SELECT * FROM reg_details WHERE email='$userName' AND pswd='$password'";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
    echo "Error: ".mysqli_error($conn);
    
    exit;
    }
   // header("Location: login.php");
    echo "You have Logged in Successfully ";//<a href='login.php'>LOGIN Here</a>";
    //mysqli_close($conn);

}

?>