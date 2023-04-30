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
                <a href="table.html">Table View</a>
                <a href="event.html">Edit Events</a>
                <div class="profile">
                    <img src="image/profile.jpg" alt="gambar admin" class="sideimg">
                        <a href="login.html">
                            <button class="button" role="log out">Log Out</button>
                        </a>
                </div>
            </div>
            <div class="main">
                    <h1 class="title">Dashboard</h1>
                <center>
                <br>
                <h3 style="color:white;">SEARCH USER</h3>
                <form action="searchfunction.php" method="POST">
                    <input type="text" name="username">
                    <br>
                    <input type="text" name="lastname">
                    <br>
                    <input type="text" name="address">
                    <br>
                    <button type="submit">Search</button>
                </form>
                </center>
            </div>
        </div>
        <?php
            $con = mysqli_connect("localhost", "root", "","consert") or die("Cannot connect to server.".mysqli_error($con));
            $user = $_POST["username"];

            // $searchsql = "SELECT * FROM userprofile WHERE LastName LIKE '%$lname%' AND username LIKE '%$user%' AND address LIKE '%$add%'";
            // $result = mysqli_query($con,$searchsql) or die("Cannot execute sql.");

        ?>
    </body>
</html>