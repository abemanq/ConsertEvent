<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
    <style>
    </style>
    </head>
    <body>
        <div class="topbar">
        <div class="sidebar">
            <a href="dashboard.html" style="color: rgb(255, 255, 255);">Dashboard</a>
                <a href="event.php">Edit Events</a>
                <div class="sideprofile">
                    <img src="/ConsertEvent/image/profile.jpg" alt="gambar admin" class="sideimg">
                        <a href="adminlogin.html">
                            <button class="button" role="log out">Log Out</button>
                        </a>
                </div>
            </div>
            <div class="main">
                <h1 class="title">Dashboard</h1>
                <center>
                <h3 style="color:white">Registered Customer</h3>
                <style>
                    <?php include 'dashboard.css'; ?>
                </style>
                <?php
                    echo "<table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Quantity Tix</th>
                        <th>Username</th>
                        <th>Seat Type</th>
                    </tr>";
                    $con = mysqli_connect("localhost", "root", "","consert") or die("Cannot connect to server.".mysqli_error($con));
                    $sql = "SELECT * FROM customers";
                    $result = mysqli_query($con,$sql) or die("Cannot execute sql.");
                    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
                    {
                    $fname=$row[0];
                    $lname=$row[1];
                    $email=$row[2];
                    $pnum=$row[3];
                    $qty=$row[4];
                    $username=$row[6];
                    $seat=$row[7];

                    echo "<tr>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$email</td>
                    <td>0$pnum</td>
                    <td>$qty</td>
                    <td>$username</td>
                    <td>$seat</td>
                    </tr>";
                    }
                    echo "</table>";
                ?>
                <a href="dashboard.html">
                    <button>Back to dashboard</button>
                </a>
                </center>
            </div>
        </div>
    </body>
</html>