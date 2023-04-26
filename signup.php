<?php
$con=mysqli_connect('localhost', 'root', '', 'concert') or die("Cannot connect to server." . mysqli_error($con));

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  $insert_sql="INSERT INTO customers VALUES(null, '$username', '$email', '$password', '$confirm_password')";
  $sql_result = mysqli_query($con, $insert_sql) or die("Error in inserting data due to " . mysqli_error($con));
  if($sql_result) {
    echo "Successfully insert new data.";
  } else {
    echo "Error in inserting new data";
  }
}

mysqli_close($con);
?>
