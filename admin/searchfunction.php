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
                <a href="event.html">Edit Events</a>
                <div class="profile">
                <img src="/ConsertEvent/image/profile.jpg" alt="gambar admin" class="sideimg">
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
                <form action="searchprocess.php" method="POST">
                    <input type="text" name="username" placeholder="Username">
                    <br>
                    <br>
                    <input type="text" name="lastname" placeholder="Last Name">
                    <br>
                    <br>
                    <input type="text" name="address" placeholder="Address">
                    <br>
                    <br>
                    <input type="text" name="seatype" placeholder="Seat Category">
                    <br>
                    <br>
                    <button type="submit">Search</button>
                    <button type="reset">Cancel</button>
                </form>
                </center>
            </div>
        </div>
    </body>
</html>