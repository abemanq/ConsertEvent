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
        table {
            background-color: #D0D38F;
			border-collapse: collapse;
			margin: auto;
			font-family: Arial, sans-serif;
			font-size: 14px;
			width: 30%;
			border: 1px #949D6A;
			box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
		}
		
		th, td {
			text-align: center;
			padding: 10px;
			border: 1px #949D6A;
		}
		
		th {
			background-color: #f2f2f2;
			color: #949D6A;
		}
		
		tr:nth-child(even) {
			background-color: #949D6A;
		}
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
                <?php
                    echo "<table><tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Address</th>
                        </tr>";
                    $con = mysqli_connect("localhost", "root", "","consert") or die("Cannot connect to server.".mysqli_error($con));
                    $sql = "SELECT * FROM userprofile";
                    $result = mysqli_query($con,$sql) or die("Cannot execute sql.");
                    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
                    {
                    $fname=$row[0].$row[1];
                    $usr=$row[4];
                    $add=$row[6];

                    echo "<tr>
                    <td>$fname</td>
                    <td>$usr</td>
                    <td>$add</td>
                    </tr>";
                    }
                    echo "</table>";
                ?>
                <br>
                <form action="deleteselect.php" method="POST">
                    <input type="text" placeholder="Enter username.." name="username">
                    <button type="submit">Delete</button>
                </form>
                </center>
            </div>
        </div>
    </body>
</html>