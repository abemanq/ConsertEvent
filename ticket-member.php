<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="ticket-member.css">
    <title>Ticket</title>
</head>
<body>
    <?php 
        session_start();
        $conn = mysqli_connect('localhost', 'root', '', 'consert');
    ?>
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
        <a class="sideimg" href="home-user.php">
          <img src="image/profile.jpg" alt="logo sini" style="width: 40px; height:40px; border-radius: 20px;">
        </a>
      </strong>
    </div>
  </nav>
  </div>
      <!-- content here -->
<center>
    <p class="title">
        <b>TICKETS</b>
    </p>
  </center>
    <!-- event Registration here -->
  <div class="page-wrapper p-t-0 p-b-10 font-robo">
    <div class="wrapper wrapper--w680">
      <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="titleform"><b>Event Ticket</b></h2>
                    <h4 class="titleform">12pm-12am</h4>
                    <h4 class="titleform">Ticket: RM300</h4>
                    <h4 class="detailform">Location: Sunway Lagoon</h4>
                    <form method="POST" action="ticket.php">
                      <div class="row row-space">
                        <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name" name="fname">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="lname">
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                          <input class="input--style-1" type="text" placeholder="Email" name="email">
                      </div>
                        <div class="row row-space">
                            <div class="col-2">                                
                                <div class="input-group">
                                  <input class="input--style-1" type="text" placeholder="Phone Number" name="pnum">
                                </div>
                            </div>                           
                              <div class="col-2">
                                <div class="input-group3">
                                  <label for="Ticket" class="tix">Select Quantity Ticket:--</label>
                                  <select id ="Ticket" class="input--style-2" type="text" name="tix">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                                </div>
                              </div>                             
                        </div>
                        <div class="row row-space">
                            <div class="col-2">                                
                                
                            </div>                           
                              <div class="col-2">
                                <div class="input-group3">
                                  <label for="Ticket" class="tix">Select Seat Type:--</label>
                                  <select id ="Ticket" class="input--style-2" type="text" name="tix">
                                    <?php
                                    $seatsql = "SELECT * FROM seater";
                                    $seat = mysqli_query($conn, $seatsql);
                                    while($seat_row = mysqli_fetch_row($seat)){
                                    echo "<option value=$seat_row[0]>$seat_row[0]</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                              </div>                             
                        </div>                  
                        </div>
                        <div class="row">
                          <div class="col-6">                                
                            <div class="input-group2">
                              <input id="terms" class="input--style-4" type="checkbox" name="tnc" required>
                              <label for="terms" class="terms">I've read all the <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">terms and condition</a> before purhasing the ticket. I understand and will continue my purchase.</label>
                            </div>
                          </div>
                          <div class="col-6">    
                            <div class="butang">
                              <button class="btn btn--radius btn--green" type="submit">Submit</button>
                              <span class="cancel">
                                <button class="btn btn--radius btn--blue" type="reset">Cancel</button>
                              </span>
                            </div>         
                          </div>
                        </div>
                        </div>
                    </form>
          </div>
      </div>
    </div>
  </div>

      <!-- footer here -->
      <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Links  -->
        <section class="" style="padding-top: 0.5%;">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3 text-secondary"></i>AKU,DIA DAN KAMU
                </h6>
                <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>