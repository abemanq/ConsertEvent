<?php
//connect database
$con=mysqli_connect('localhost', 'root', '', 'concert') or die("Cannot connect to server." . mysqli_error($con));

//initialize variable
if(isset($_POST['FullName']) && isset($_POST['LastName']) && isset($_POST['email']) && isset($_POST['Pnum']) && isset($_POST['username']) && isset($_POST['Pnum']) && isset($_POST['password']) && isset($_POST['Address'])) {
    $FullName = $_POST['FullName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['email'];
    $Pnum = $_POST['Pnum'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Address = $_POST['Address'];

  $insert_sql="INSERT INTO customers VALUES(null, '$FullName', '$LastName', '$Email', '$Pnum', '$username', '$password', '$Address')";
  $sql_result = mysqli_query($con, $insert_sql) or die("Error in inserting data due to " . mysqli_error($con));
  if($sql_result){
      echo "Data inserted successfully.";
  }
  else{
      echo "Error in inserting data.";
  }
}
?>
