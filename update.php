<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="update.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- making navigation bar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home-member.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ticket-member.html">Ticket</a>
        </li>
        <li class="nav-item">
          <strong>
            <a class="navbar-brand" href="home-member.html">
              <img src="image/logo.png" alt="logo sini" style="width: 60px; height:60px;">
            </a>
          </strong>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="artist-member.html">Artist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq-member.html">FAQ</a>
        </li>
      </ul>
    </div>
    <div class="sideprofile">
      <strong>
        <a class="sideimg" href="userprofile.html">
          <img src="image/profile.jpg" alt="logo sini" style="width: 40px; height:40px; border-radius: 20px;">
        </a>
      </strong>
    </div>
  </nav>
  </div>
<?php
    session_start();

    $connect=mysqli_connect("localhost","root","","consert") or die("Connection failed");
    $username = $_SESSION['username'];
    $query = " SELECT * FROM userprofile WHERE username = '$username'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result)
?>

    <form action="update-details.php" method="post" align="center">

        Full Name: <input type="text" name="fname" value="<?php echo $row['FullName']?>"><br>
      
        Last Name: <input type="text" name="lname"value="<?php echo $row['LastName']?>"><br>
      
        Email: <input type="email" name="email" value="<?php echo $row['Email']?>"><br>

        Phone Number: <input type="text" name="pnum" value="<?php echo $row['Pnum']?>"><br>

        Username: <input type="text" name="username" value="<?php echo $row['username']?>" readonly><br>

        Password: <input type="password" name="password" value="<?php echo $row['password']?>" readonly><br>

        Address: <input type="text" name="address" value="<?php echo $row['Address']?>"><br>
        
        <input type="submit" name="edit">
        
     </form>
</body>
</html>