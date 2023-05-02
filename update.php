<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="userprofile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
    <style>
      table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px 0;
        font-size: 16px;
        font-family: Arial, sans-serif;
        color: #333;
        background-color: #FFEE88;
      }

      thead {
        background-color: #f2f2f2;
      }

      th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      th {
        font-weight: bold;
        text-transform: uppercase;
      }

      tr:nth-child(even) {
        background-color: #00CC99;
      }

      tr:hover {
        background-color: #ddd;
      }
    </style>
  </head>

<body class="body">
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
          <a class="nav-link" href="ticket-member.php">Ticket</a>
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
        <a class="sideimg" href="home-user.php">
          <img src="image/profile.jpg" alt="logo sini" style="width: 40px; height:40px; border-radius: 20px;">
        </a>
      </strong>
    </div>
  </nav>
  </div>
  <center>
    <?php
    session_start();
    $connect=mysqli_connect("localhost","root","","consert") or die("Connection failed");
    $username = $_SESSION['username'];
    $query = " SELECT * FROM userprofile WHERE username = '$username'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <h2 class="title">Welcome <?php echo $username ?> </h2> 
    
    <p class="subtitle">Set-up your own profile so that people can know you better !</p>
    <form action="update-details.php" method="post" style="margin-top: 0em;">
    <table>
      <tr>
        <th>Full Name:</th>
        <td>
          <input type="text" name="fname" value="<?php echo $row['FullName']?>"><br>
        </td>
      </tr>
      <tr>
        <th>Last Name:</th>
        <td>
          <input type="text" name="lname"value="<?php echo $row['LastName']?>"><br>
        </td>
      </tr>
      <tr>
        <th>Email:</th>
        <td>
          <input type="email" name="email" value="<?php echo $row['Email']?>"><br>
        </td>
      </tr>
      <tr>
        <th>Phone Number:</th>
        <td>
          <input type="text" name="pnum" value="<?php echo $row['Pnum']?>"><br>
        </td>
      </tr>
      <tr>
        <th>Address:</th>
        <td>
          <input type="text" name="address" value="<?php echo $row['Address']?>"><br>          
        </td>
      </tr>
      <tr>
        <th>Username:</th>
        <td>
          <input type="text" name="username" value="<?php echo $row['username']?>" style="color:grey;"readonly><br> 
        </td>
      </tr>
      <tr>
        <th>Password:</th>
        <td>
          <input type="password" name="password" value="<?php echo $row['password']?>" style="color:grey;" readonly><br>         
        </td>
      </tr>
    <table>
        <!-- content -->
        <input type="submit" name="edit">
        <button type="submit" name="edit" style="margin-left:5px;">Back</button>
      </div>
    </form>
  </center>
  <br>
  <br>
  <br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">

    <!-- Section: Links  -->
    <section class="" style="padding-top: 0.5%;">
      <div>
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>AKU,DIA DAN KAMU
            </h6>
            <p>
            Art of Speed Malaysia is an annual event featuring artwork in various formats including canvas, poster, moving visual, sculpture and rolling art. Exhibitors are exclusively invited to the show promising quality content for visitors.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Home</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ticket</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Artist</a>
            </p>
            <p>
              <a href="#!" class="text-reset">FAQs</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Socials
            </h6>
            <p>
              <a href="#!" class="text-reset">Facebook</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Instragram</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Twitter</a>
            </p>
            <p>
              <a href="#!" class="text-reset">GitHub</a>
            </p>
          </div>
          <!--Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i>Putrajaya, MY</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              AOS2023@events.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> +60 11 2786 5650</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> +60 12 756 3347</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023Copyright:
      <a class="text-reset fw-bold text-decoration-none" href="">AOS2023</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>