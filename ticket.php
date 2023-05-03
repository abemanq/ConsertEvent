<html>
    <body>
        <?php 
            session_start();

            // connect to database
            $conn = mysqli_connect('localhost', 'root', '', 'consert');

            $num_sql = "SELECT COUNT(*) from customers";
            $num_result = mysqli_query($conn, $num_sql);
            $num_row = mysqli_fetch_array($num_result)[0];

            //Query for admin set quota
            $quota = "SELECT * FROM quotas";
            $quota_result = mysqli_query($conn, $quota);
            $row = mysqli_fetch_row($quota_result);
            $max_row = $row[0];

            if ($num_row > $max_row) {
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