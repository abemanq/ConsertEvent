<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<body>
<?php 
    $con = mysqli_connect("localhost", "root", "","consert") or die("Cannot connect to server.".mysqli_error($con));
    $usr = $_POST["username"];

    echo "<table border='3' style='color:white; font-size:20px;'><tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <td>Phone Number</td>
    <td>Username</td>
    <td>Address</td>
    </tr>";
    
    $previewsql = "SELECT * FROM userprofile";
    $result = mysqli_query($con,$previewsql) or die("Cannot execute sql.");
    $row=mysqli_fetch_array($result,MYSQLI_NUM);

    $usr = $row[4];
    $fname = $row[0];
    $lname = $row[1];
    $email = $row[2];
    $pnum = $row[3];
    $add = $row[6];

    echo "<tr>
    <td>$usr</td>
    <td>$fname</td>
    <td>$lname</td>
    <td>$email</td>
    <td>$pnum</td>
    <td>$add</td>
    </tr>";
    echo "</table>";
?>


    $sql_delete = "DELETE FROM userprofile WHERE username='$usr'";
    $sql_result = mysqli_query($con,$sql_delete) or die("Error in sql due to ".mysql_error());
    if($sql_result){
    echo "<h3 style='color:white;'>Succesfully deleted.</h3>";
    echo "<a href=dashboard.html><button>Back To Dashboard<button></a>";
    }
    else
    echo "Error in deleting the data";


</body>
</html>