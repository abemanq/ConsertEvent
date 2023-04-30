<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
</head>
<body>
<?php
    $con=mysqli_connect("localhost", "root", "","consert") or die("Cannot connect to server.".mysqli_error($con));
    echo "<table border='1'><tr>
    <td>Full Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <td>Phone Number</td>
    <td>Username</td>
    <td>Address</td>
    </tr>";

    $user=$_POST["username"];
    $lname=$_POST["lastname"];
    $address=$_POST["address"];

    // sql code
    $sql="SELECT * FROM userprofile WHERE username LIKE '%$user%' AND LastName LIKE '%$lname%' AND Address LIKE '%$address%' ";
    $result=mysqli_query($con,$sql) or die("Cannot execute sql.");

    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
    {
    $fname=$row[0];
    $lname=$row[1];
    $email=$row[2];
    $pnum=$row[3];
    $username=$row[4];
    $address=$row[6];

    echo "<tr>
    <td>$fname</td>
    <td>$lname</td>
    <td>$email</td>
    <td>$pnum</td>
    <td>$username</td>
    <td>$address</td>
    </tr>";
    }
    echo "</table>";
?>
</body>
</html>