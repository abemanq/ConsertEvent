<?php
//connect database
$con=mysqli_connect('localhost', 'root', '', 'concert') or die("Cannot connect to server." . mysqli_error($con));

//initialize variable
if(isset($_POST['Full Name']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['Pnum']) && isset($_POST['username']) && isset($_POST['Pnum']) && isset($_POST['password']) && isset($_POST['Address'])) {
    $FullName = $_POST['FullName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Pnum = $_POST['Pnum'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Address = $_POST['Address'];

  $insert_sql="INSERT INTO customers VALUES(null, '$FullName', '$LastName', '$Email', '$Pnum', '$username', '$password', '$address')";
  $sql_result = mysqli_query($con, $insert_sql) or die("Error in inserting data due to " . mysqli_error($con));
  if($sql_result) {
    echo "Successfully insert new data.";
  } else {
    echo "Error in inserting new data";
  }
}

mysqli_close($con);
?>
