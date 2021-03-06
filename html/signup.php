<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/signup.css">
	<!-- script -->
    
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
  <div class="container register">
                  <div class="row">
                      <div class="col-md-3 register-left">
                          <img src="../images/signup/bus-icon.png"alt=""/>
                          <h3>Welcome</h3>
                          <p>Further.Faster.Safer!</p>
                          <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
                            Login
                          </button>  
                        </div>
                        
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
                                  <form>
                                    <div class="form-group">
                                      <input type="email" class="form-control" id="email1"placeholder="Your email address...">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="password1" placeholder="Your password...">
                                    </div>
                                    <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                                  </form>
                                  
                                  <div class="text-center text-muted delimiter">or use a social network</div>
                                  <div class="d-flex justify-content-center social-buttons">
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                                      <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                                      <i class="fab fa-facebook"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                      <i class="fab fa-linkedin"></i>
                                    </button>
                                  </di>
                                </div>
                              </div>
                            </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <div class="signup-section">Not a member yet? <a href="signup.html" class="text-info"> Sign Up</a>.</div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-9 register-right">
                         
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             
                          
                               
                
                              <div class="row errormsg">
                                  <div class="alert alert-danger" role="alert" id="errormsg" style="visibility: hidden;"> </div>
                                  </div>
                                       

                                  <div class="row register-form">
                                  
                                      <div class="col-md-6">
                                      <form>
                                     
                                      
                                          <div class="form-group">
                                              <input type="text" id="name" name="name" class="form-control" placeholder="Full Name *" value="" required/>
                                          </div>
                                          <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="UserName *" value="" required/>
                                        </div>
                                          <div class="form-group">
                                              <input type="password" id="signuppassword" name="signuppassword" class="form-control" placeholder="Password *" value="" />
                                          </div>
                                          <div class="form-group">
                                              <input type="password" id="re_password"  name="re_password"  class="form-control"  placeholder="Confirm Password *" value="" />
                                          </div>
                                        
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <input type="text" id="signupemail" name="signupemail" class="form-control" placeholder="Your Email *" value="" />
                                          </div>
                                          <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        
                                         
                                         
                                          <input type="submit" id="signup" class="btnRegister"  value="Register"/>
                                      </div>
                                          
                                  </div>
                                </form>
                              </div>
                              
                          </div>
                      </div>
                  </div>
  
              </div>
                <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../js/signup.js"></script>
   <!-- Custom Script -->      

              
  </body>
</html>