<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <title>Edit Events</title>
    <style>
    </style>
    </head>
    <body>
        <?php 
            session_start();
            $conn = mysqli_connect('localhost','root','','consert');
        ?>
        <div class="topbar">
            <div class="sidebar">
                <a href="dashboard.html">Dashboard</a>
                <a href="table.html">View Table</a>
                <a href="event.php" style="color: rgb(255, 255, 255);">Edit Events</a>
                <div class="sideprofile">
                    <img src="/image/profile.jpg" alt="gambar admin" class="sideimg">
                        <a href="adminlogin.html">
                            <button class="button" role="log out">Log Out</button>
                        </a>
                </div>
            </div>
            <div class="main">
                    <h1 class="title">Edit Events</h1>
                <center>
                <h3 style="color:white;">Delete Seat Section</h3>
                    <form action="delete-seat-process.php" method='post'>
                        <label for="" style="color:white;">Select Seat Section</label><br><br>
                        <!-- make a radiobutton form -->
                        <?php
                            $seatsql = "SELECT * FROM seater";
                            $seat = mysqli_query($conn, $seatsql);
                            while($seat_row = mysqli_fetch_row($seat)){
                                echo "<input type='checkbox' name='seat' value='$seat_row[0]'/>";
                                echo "<label style='color:white;'>$seat_row[0]</label><br>";
                            }
                        ?>
                        <button type="submit">Delete</button>
                    </form>
                </center>
            </div>
        </div>
    </body>
</html>