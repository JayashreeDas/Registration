
<?php
require 'db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "inside if";
    $firstName=$_POST['firstName'];
    $lastName= $_POST['lastName'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $gender=$_POST['gender'];
    
    

    $sql="INSERT INTO reg_details(first_name,last_name,email,pswd,gender) VALUES ('$firstName','$lastName','$email','$password','$gender')";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
    echo "Error: ".mysqli_error($conn);
    exit;
    }
   header("Location: login.php");
    //echo "Registration Successful <a href='login.php'>LOGIN Here</a>";
    //mysqli_close($conn);

}

?>


