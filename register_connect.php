
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Connect</title>
</head>
<body>
    
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];

    $sql="INSERT INTO reg_details(first_name,last_name,email,pswd,gender) VALUES ('$firstName','$lastName','$email','$password','$gender')";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
    echo "Error: ".mysqli_error($conn);
    exit;
    }
    header("Location: login.php")
    //echo "Registration Successful <a href='login.php'>LOGIN Here</a>";
    mysqli_close($conn);

}

?>

</body>
</html>
