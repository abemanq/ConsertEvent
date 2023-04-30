<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>


<body>
<?php
    $connect=mysqli_connect("localhost","root","","consert") or die("Connection failed");
?>


    <form action="update-details.php" method="post" align="center">
        <?php 
        $query = " SELECT * FROM userprofile";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_assoc($result))?>{

        Full Name: <input type="text" name="fname" value="<?php echo $row['FullName']?>"><br>
      
        Last Name: <input type="text" name="lname"value="<?php echo $row['LastName']?>"><br>
      
        Email: <input type="email" name="email" value="<?php echo $row['Email']?>"><br>

        Phone Number: <input type="text" name="pnum" value="<?php echo $row['Pnum']?>"><br>

        Username: <input type="text" name="username" value="<?php echo $row['username']?>" readonly><br>

        Password: <input type="password" name="password" value="<?php echo $row['password']?>" readonly><br>

        Address: <input type="text" name="address" value="<?php echo $row['Address']?>"><br>
        
        <input type="submit" name="edit">}
        
     </form>
</body>
</html>