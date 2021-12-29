

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css' rel='stylesheet' >
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/searchbar.css">
  <link rel="stylesheet" href="../css/body.css">
  <link rel="stylesheet" href="../css/animation.css">
  <link rel="stylesheet" href="../css/testimonies.css">
  <link rel="stylesheet" href="../css/aboutus-main.css">
</head>

<body>

<?php include ('header.php'); ?>
  

  <!--search bar-->

  <div id="booking" class="section-searchbar">
    <div class="section-searchbar-center">
        <div class="container">
      
            <div class="row">
                <div class="col-md-7 col-md-offset-1">
                    <div class="booking-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">From</span>
                                        <input class="form-control" type="text" required placeholder="City or Town">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">To</span>
                                        <input class="form-control" type="text" required placeholder="City or Town">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Departing Date</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Time</span>
                                        <input class="form-control" type="time" required>
                                    </div>
                                </div>
                            </div>
            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Seats</span>
                                        <input type="number" min=1 class="form-control" value=1>
                                        
                                        <span class="select-arrow"></span>
                                        </div>
                                </div>
                                        
                                        <div class="col-md-6">
                                        <div class="form-btn">
                                        <a href="list.html"><button class="submit-btn">Show Trips</button></a>
                                        </div>
                                    </div>
                                    
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
<div class="container features px-4 py-4">
  <h2 class="pb-2 border-bottom">Our Advantages</h2>
  <div class="row g-4 py-5 row-cols-sm-12 row-cols-lg-3 ">
    <div class="feature col">
        <div class="img-features"><img src ="../images/body/wifi.png" alt ="Wifi" class = "img-adv"> </div>
      <div class="feature-col-titles">Fast and Free Wifi</div>
      <p class="info-feature">Equipped with Wi-Fi and ac.</p>
     
    </div>
    <div class="feature col">
      <div class="img-features"> <img src ="../images/body/seat.png" alt ="seat class="  class = "img-adv"></div>
      <div class="feature-col-titles">Comfortable Seats</div>
      <p class="info-feature">Spend hours without any discomfort.</p>

    </div>
    <div class="feature col">
      <div class="img-features"><img src ="../images/body/bus.png" alt ="bus" class = "img-adv"></div>
      <div class="feature-col-titles">Travel Anywhere</div>
      <p class="info-feature">Travel anywhere around the country. </p>
     
    </div>
    <div class="feature col">
      <div class="img-features"> <img src ="../images/body/wallet.png" alt ="wallets" class = "img-adv"></div>
      <div class="feature-col-titles">Book Trips Easily</div>
      <p class="info-feature">Cash, Visa, MasterCard, etc.</p>
     
    </div>
  </div>
</div>
</main>

<div class="container animation">
  <h2 class="pb-2 border-bottom">Popular Bus Tickets</h2>
  <div class="d-lg-flex">
    
      <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
      
          <div class="col1 me-md-4 mb-md-0 mb-5">
              <div class="card pb-4"> <img src="../images/body/baalbak2.jpg"  class="fab fa-envira mt-3"></span>
                  <p class="h4 pt-4">Beirut>Baalbek</p>
                  <p class="p1 text-muted">Ancient History and Archaeological Site.</p>
                  <div class="trip-info">
                  
                      <p class="p1 text-muted" >2 Hours</p>
                      <p class="p1 text-muted" >Up To 3o people</p>
                      <p class="p1 text-muted" >Only 10$</p>
                      </div> <button alt="book now" class="fas fa-arrow-right"></button>
                      
              </div>
          </div>
          <div class="col2 me-md-4 mb-md-0 mb-5">
              <div class="card pb-4"> <img src="../images/body/Beirut.png"  class="fab fa-envira mt-3"></span>
                  <p class="h4 pt-4">Saida>Beirut</p>
                  <p class="p1 text-muted">Nightlife, Museums and Cathedrals.</p> 
                    <div class="trip-info">
                  
                  <p class="p1 text-muted" >1 Hour</p>
                  <p class="p1 text-muted" >Up To 3o people</p>
                  <p class="p1 text-muted" >Only 10$</p>
                  </div>
                  <button class="fas fa-arrow-right"></button>
                  
              </div>    
          </div>
          <div class="col3 me-md-4 mb-md-0 mb-5">
              <div class="card pb-4"> <img src="../images/body/tyre.jpg"  class="fab fa-envira mt-3"></span>
                  <p class="h4 pt-4">Nabatieh>Tyre</p>
                  <p class="p1 text-muted">Impressive ruins and long stretch of sandy beach.</p> 
                  <div class="trip-info">
                  <p class="p1 text-muted" >1 Hour</p>
                  <p class="p1 text-muted" >Up To 3o people</p>
                  <p class="p1 text-muted" >Only 10$</p>
                  </div>
                  <button  class="fas fa-arrow-right"></button>
              </div>
          </div>
      </div>
      <div class="col4">
          <div class="content"> <span class="h-6">Station And Tickets</span>
              <p class=" h3 mb-4">Find Your Station</p>
              <p class="text-muted mb-4">For us, it’s not just about getting you from point A to point B. It’s about creating an experience that moves you.</p>
              <p><a href="list.html" class="btn btn-primary">Learn More</a></p>
          </div>
      </div>
  </div>
</div>

<div class="container testimonies">
  <h2 class="pb-2 border-bottom">Testimonials</h2>
  <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="carousel-caption">
                  <p>It’s a perfect service for booking bus tickets online! I got the numberfrom a helpline at 2.00 pm & by 3.30 I got my tickets booked at 9.00pm, when others had no seats.</p> <img src="../images/body/man.png" class="img-fluid">
                  <div id="image-caption">Nick Doe</div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="carousel-caption">
                  <p>I haven't ever booked any ticket before Wasselni, but the site looks great as if we are booking an air ticket. Great work! I will definitely book tickets from your company from now on!</p> <img src="../images/body/man.png" class="img-fluid">
                  <div id="image-caption">Cromption Greves</div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="carousel-caption">
                  <p>Thank you very much for support. Keep going like this and I wish you people to be the No.1 Online Bus Ticket provider in our country. You are really doing a good job.</p> <img src="../images/body/man.png" class="img-fluid">
                  <div id="image-caption">Harry Mon</div>
              </div>
          </div>
      </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
  </div>
</div>


<div class="container about-us">
  <div class="col-lg-12 col-sm-12">
      <div class="content"> <span class="h-6-about-us">About Us</span>
          <p class=" h3 mb-4 abtus">Get To Know Us</p>
          <p class="text-about-us">We provide affordable and reliable bus ticket booking services online all over the world.</p>
          <p class="text-about-us">Wasselni was officially launched in spring of 2002. The main focus was to market and offer online bus ticketing services for bus companies running inter-city bus services.

          </p>
          <p><a href="about-us.html" class="btn btn-primary about-us-btn">Learn More</a></p>
      </div>
      </div>
      </div>
  </div>
  </div>


  <footer class="footer-48201">
    
    <div class="container">
      <div class="row">
        <div class="col-md-4 pr-md-5">
          <a href="main.html" class="footer-site-logo d-block logo">Wasselni</a>
          <p>is the leading go-to website for booking inter-city bus ticket online. Our booking system allows travelers to search and book bus tickets for over a hundred locations throughout the Country.</p>
        </div>
        <div class="col-md">
          <ul class="list-unstyled nav-links">
            <li><a href="main.html">Home</a></li>
            <li><a href="list.html">Station and Tickets</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
            <li><a href="about-us.html">About Us</a></li>
          </ul>
        </div>
     
        <div class="col-md">
          <ul class="list-unstyled nav-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Partners</a></li>
          </ul>
        </div>
        <div class="col-md">
          <img src="../images/body/logo.png" style="width: 20rem; margin-top: -2rem;">
        </div>
      </div> 

      <div class="row ">
        <div class="col-12 text-center">
          <div class="copyright mt-5 pt-5">
            <p class="copyrighttext"><small>&copy; 2021-2022 All Rights Reserved.</small></p>
          </div>
        </div>
      </div> 
    </div>
    
</footer>


<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Custom Script -->      
 <script src="../js/login.js"></script>
   
</body>
</html>
