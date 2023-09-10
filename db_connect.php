<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Page</title>
</head>
<body>
    
<?php
//this is data base connection page

    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="registration";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
    echo "Connection failed: ".mysqli_connect_error();
    exit;
    }
    echo "Connection successful";




?>

</body>
</html>