<html>
    <body>
        <?php 
            session_start();

            // connect to database
            $conn = mysqli_connect('localhost', 'root', '', 'Consert');

            //Make query to check total customer
            $sql = "SELECT COUNT(*) FROM customers";
            $checkcount = mysqli_query($conn, $sql);
            $num_row = $checkcount;
            // $row = mysqli_fetch_assoc($checkcount);
            // $count = $row['count'];
            
            if ($num_row > 3) {
              //Display fail to buy ticket page
              header("Location: failreg.html");
            }
            else{
            //Initialize variable
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uemail = $_POST["email"];
            $upnum= $_POST["pnum"];
            $qty = $_POST["tix"];
            $seat = $_POST["seat"];
            $usr = $_SESSION['username'];
            
            //Make query to insert data and confirm ticket
            $sql = "INSERT INTO customers (FullName, LastName, Email, Pnum, Qty, id,username, seatype) VALUES ('$fname', '$lname', '$uemail', '$upnum', '$qty', NULL, '$usr', '$seat')";

            //connect query into database
            $result = mysqli_query($conn, $sql);

            if($result)
                header("Location: ticketsuccess.html");
            else{
                echo "You Failed to Purchase the ticket";
                echo mysqli_error($conn);
            }
        }
        ?>
    </body>
</html>