
<?php 
session_start();

if (!isset($_SESSION['id']) && !isset($_SESSION['email'])) {

 ?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      
      <div class="mx-auto order-0">
        <a href="main.php"> <img src="../images/body/logo.png" style="width: 8rem ; padding: 0;" class="navbar-brand mx-auto" ></a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="list.php">Station And Tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">About us</a>
          </li>
          
         
          
          </ul>
          <!--modal .........................................-->
          <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
            Login
          </button>
        </div>
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                Modal body..
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
        
            </div>
          </div>
        </div>
                <!--end Modal..............................................-->
      </div>
    </div>
  </nav>

 <main>
  <article>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
        <div class="alert alert-danger" role="alert" id="errormsg" style="visibility: hidden;"> </div>
          <form>
          
            <div class="form-group">
              <input type="email" name="useremail" id="useremail" class="form-control" id="email"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" name="userpass" id="userpass" class="form-control" id="password" placeholder="Your password...">
            </div>
            <button type="submit" id="login" class="btn btn-info btn-block btn-round">Login</button>
          </form>
         
          <div class="text-center text-muted delimiter">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round"  data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round"  data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round"  data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="signup.php" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div> 
<!-- partial -->

  
  </article>
 </main>
 <?php } else {?>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      
      <div class="mx-auto order-0">
        <a href="main.php"> <img src="../images/body/logo.png" style="width: 8rem ; padding: 0;" class="navbar-brand mx-auto" ></a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="list.php">Station And Tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">About us</a>
          </li>
          
         
          
          </ul>
          <!--modal .........................................-->
          <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
          <?=$_SESSION['username']?>

          </button>
        </div>
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                Modal body..
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
        
            </div>
          </div>
        </div>
                <!--end Modal..............................................-->
      </div>
    </div>
  </nav>

 <main>
  <article>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body account">
      <link href="../css/profile.css" rel="stylesheet">

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


        
            <div class="card m-b-30 profile ">
                <div class="card-body row ">
                    <div class="col-6">
                        <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-fluid rounded-circle w-60"></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h5><?=$_SESSION['username']?></h5>
                        <p class="m-0"><?=$_SESSION['role']?></p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i style="padding-left:1rem;" class="fa fa-envelope float-right"></i>Email : <a href="#"><?=$_SESSION['email']?></a></li>
                    <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : <?=$_SESSION['phone']?></li>
                </ul>
               
            </div>
   
      
    

    </div>
      <div class="modal-footer d-flex justify-content-center">
      <a href="logout.php" class="btn btn-primary ">Logout</a>
      </div>
  </div>
</div> 
<!-- partial -->

  
  </article>
 </main>



 <?php } ?>