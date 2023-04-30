<?php
 
 session_start();
 //connect database
 $conn = mysqli_connect('localhost', 'root', '', 'consert');
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pnum=$_POST['pnum'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set fname='$fname',lname='$lname',email='$email',pnum='$pnum',username='$username',
       password='$password',address='$address' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:userprofile.html');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:update_details.html.');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:update_details.html.php');
    }
 }
?>