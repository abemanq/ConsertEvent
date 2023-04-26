<html>
<body>
<?php
$con=mysqli_connect("localhost", "root", "","concert") or die("Cannot connect to
server.".mysqli_error($con));

 $username = $_POST["username"];
 $email = $_POST["email"];
 $inputPassword5 = $_POST["inputPassword5"];
 $inputPassword6 = $_POST["inputPassword5"];


 $insert_sql="INSERT INTO customers VALUES(null, '$username', '$email', '$inputPassword5', '$inputPassword6')";
 $sql_result =mysqli_query($con,$insert_sql) or die("Error in inserting data due to
".mysql_error());
if($sql_result)
 echo "Succesfully insert new data.";
 else
 echo "Error in inserting new data";
?>
</body>
</html> 