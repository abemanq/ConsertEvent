<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//connect database
$con=mysqli_connect('localhost', 'root', '', 'consert');

//initialize variable
if(isset($_POST['FullName']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['Pnum']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['Address'])) {
    $FullName = $_POST['FullName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Pnum = $_POST['Pnum'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Address = $_POST['Address'];

    //to find whether username aldready used
    $query = "SELECT * from userprofile where username='$username'";
    $result = mysqli_query($con , $query);
    
    //to return the query result in number of rows
    if (mysqli_num_rows($result)>0){
        die("<script>alert('Username is taken'); window.location.href='signup2.html';</script>");
    }
    else {
        $insert_sql="INSERT INTO userprofile (FullName,LastName,Email,Pnum,username,password,Address) VALUES('$FullName', '$LastName', '$Email', '$Pnum', '$username', '$password', '$Address')"; 
        mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysqli_error());
        if($insert_sql)
        header("Location: successreg.html");
        else
        echo "Error in inserting new data";
    }
}
?>
</body>
</html>
