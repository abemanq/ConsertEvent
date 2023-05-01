<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <title>Search User</title>
</head>
<body>
<div class="topbar">
            <div class="sidebar">
                <a href="dashboard.html" style="color: rgb(255, 255, 255);">Dashboard</a>
                <a href="table.html">Table View</a>
                <a href="event.html">Edit Events</a>
                <div class="container">
                    <div class="sideprofile">
                        <img src="image/profile.jpg" alt="gambar admin" class="sideimg">
                        <a href="login.html">
                            <button class="button" role="log out">Log Out</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main">
                <h1 class="title">Dashboard</h1>
                <center>
                    <h3 style="color:white">User Found.</h3>

                    <?php
                        $con=mysqli_connect("localhost", "root", "","consert") or die("Cannot connect to server.".mysqli_error($con));
                        
                        $user=$_POST["username"];
                        $lname=$_POST["lastname"];
                        $address=$_POST["address"];
                        
                        // sql code
                        $sql="SELECT * FROM userprofile WHERE username LIKE '%$user%' AND LastName LIKE '%$lname%' AND Address LIKE '%$address%' ";
                        $result=mysqli_query($con,$sql) or die("Cannot execute sql.");
                        
                        if (mysqli_num_rows($result)==0){
                            echo "No user found.";
                        }
                        else{
                            echo "<table border='3' style='color:white; font-size:20px;align='center'; cellspacing='0'; cellpadding='5';'><tr>
                            <td>Full Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Username</td>
                            <td>Address</td>
                            </tr>";
                            while($row=mysqli_fetch_array($result,MYSQLI_NUM))
                            {
                            $fname=$row[0];
                            $lname=$row[1];
                            $email=$row[2];
                            $pnum=$row[3];
                            $username=$row[4];
                            $address=$row[6];

                            echo "<tr>
                            <td>$fname</td>
                            <td>$lname</td>
                            <td>$email</td>
                            <td>$pnum</td>
                            <td>$username</td>
                            <td>$address</td>
                            </tr>";
                            }
                        echo "</table>";
                    }
                    ?>
                    <a href="dashboard.html">
                        <button>Back to dashboard</button>
                    </a>
                </center>
</body>
</html>