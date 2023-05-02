<html>
    <body>
        <?php 
            session_start();

            // connect to database
            $conn = mysqli_connect('localhost', 'root', '', 'Consert');

            // initialize variable
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uemail = $_POST["email"];
            $upnum= $_POST["pnum"];
            $qty = $_POST["tix"];
            $seat = $_POST["seat"];
            $usr = $_SESSION['username'];
            
            // make query
            $sql = "INSERT INTO customers (FullName, LastName, Email, Pnum, Qty, id,username, seatype) VALUES ('$fname', '$lname', '$uemail', '$upnum', '$qty', NULL, '$usr', '$seat')";

            //connect query into database
            $result = mysqli_query($conn, $sql);

            if($result)
                header("Location: ticketsuccess.html");
            else{
                ECHO "You Failed to Purchase the ticket";
                echo mysqli_error();
            }
        ?>
    </body>
</html>