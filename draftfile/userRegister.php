<html>
<body>
<?php
 
 $con = mysqli_connect('localhost', 'root', '', 'concertevent');
 if (!$con) die("Cannot connect to server: " . mysqli_error($con)); 

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password-confirm = $_POST['password-confirm'];

 $insert_sql = "INSERT INTO concertgoers VALUES ('$username', '$email', '$password', '$password-confirm', null)";
 $sql_result = mysqli_query($con, $insert_sql);
 if ($sql_result)
    echo "Data has been inserted";
 else
    echo "Data failed to be inserted";
?>

</body>
</html>