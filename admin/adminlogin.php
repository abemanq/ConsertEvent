<html>
    <body>
        <?php 
            //connect database
            $conn = mysqli_connect('localhost', 'root', '', 'consert');

            //initialize variable
            $uname = $_POST['username'];
            $pwd = $_POST['pwd'];

            session_start();

            if (isset($uname) && isset($pwd)) {
                function validate($data){
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = htmlspecialchars($data);
                   return $data;
                }
                $uname = validate($uname);
                $pwd = validate($pwd);            
                if (empty($uname)) {
                    echo("Location:adminlogin.html");
                    exit();
                }else if(empty($pwd)){
                    header("Location:adminlogin.html");
                    exit();
                }else{
                    $sql = "SELECT * FROM administer WHERE username='$uname' AND password='$pwd'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) === 1) {
                        $row = mysqli_fetch_assoc($result);
                        if ($row['username'] === $uname && $row['password'] === $pwd) {
                            echo "Logged in!";
                            $_SESSION['username'] = $row['username'];
                            header("Location:dashboard.html");
                            exit();
                        }
                        else{
                            header("Location:adminlogin.html");
                            exit();
                        }
                    }else{
                        header("Location:adminlogin.html");
                        exit();
                    }
                }
            }else{
                header("Location:adminlogin.html");
                exit();
            }
        ?>
    </body>
</html>