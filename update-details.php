<?php
 
 session_start();
 //connect database
 $conn = mysqli_connect('localhost', 'root', '', 'consert');
 if(isset($_POST['edit']))
 {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pnum=$_POST['pnum'];
    $username=$_SESSION['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $select= "SELECT * from userprofile where username='$username'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['username'];
    if($res === $username){
       $update = "UPDATE userprofile set FullName='$fname',LastName='$lname',Email='$email',Pnum='$pnum',username='$username',
       password='$password',Address='$address' where username='$username'";
       $sql2=mysqli_query($conn,$update);
        
       if($sql2){ 
        /*Successful*/
        header('location:home-user.php');
        }
        else{
           /*sorry your profile is not update*/
           header('location:update_details.html');
        }
    }
    else{
    /*sorry your id is not match*/
    header('location:update_details.html');
    }
}
else{
    /*sorry your id is not match*/
    header('location:update_details.html');
}
?>