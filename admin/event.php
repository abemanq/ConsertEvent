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
                    <img src="/ConsertEvent/image/profile.jpg" alt="gambar admin" class="sideimg">
                        <a href="adminlogin.html">
                            <button class="button" role="log out">Log Out</button>
                        </a>
                </div>
            </div>
            <div class="main">
                    <h1 class="title">Edit Events</h1>
                <center>
                    <h3 style="color:white;">Concert Seat Editor</h3>
                    <?php echo "<table style='margin-bottom:10px;'>
	                    <thead>
	                    	<tr>
	                    		<th>Seat Category</th>
	                    	</tr>
	                    </thead>
	                    <tbody>";
                        $seatsql = "SELECT * FROM seater";
                        $seat = mysqli_query($conn, $seatsql);
                        while($seat_row = mysqli_fetch_row($seat)){
                            echo "
                            <tr>
                                <td>$seat_row[0]</td>";                               
                            echo" </tr>";
                        }                                  
                    ?>
                    </tbody>
                    <table>
                        <form action="addseat.php" method="post">
                            <button>Add Seat Section</button>
                    </form>
                    <form action="deleteseat.php" method="post">
                        <button>Delete Seat Section</button>
                    </form>
                </center>
                <br>
                <br>
                <center>
                    <h3 style="color:white;">Ticket Quota Editor</h3>
                    <?php echo "<table style='margin-bottom:10px;'>
	                    <thead>
	                    	<tr>
	                    		<th>Quota</th>
	                    	</tr>
	                    </thead>
	                    <tbody>";
                        $quotas = "SELECT * FROM quotas";
                        $quota = mysqli_query($conn, $quotas);
                        while($quota_row = mysqli_fetch_row($quota)){
                        echo "<td>$quota_row[0]</td>";      
                        }                        
                    ?>
                    </tbody>
                    <table>
                        <form action="editquota.php" method="post">
                            <button>Edit Quota Section</button>
                    </form>
                </center>
            </div>
        </div>
    </body>
    </html>