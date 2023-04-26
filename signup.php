<html>
<body>
<?php
$con=mysqli_connect("localhost", "root", "","bookonline") or die("Cannot connect to
server.".mysqli_error($con));

 $name=@$_POST["name"];
 $password=@$_POST["password"];
 $address=@$_POST["address"];


 $insert_sql="INSERT INTO customer VALUES(null, '$password', '$name', '$address')";
 $sql_result =mysqli_query($con,$insert_sql) or die("Error in inserting data due to
".mysql_error());
if($sql_result)
 echo "Succesfully insert new data.";
 else
 echo "Error in inserting new data";
?>
</body>
</html> 