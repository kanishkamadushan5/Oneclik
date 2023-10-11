<!DOCTYPE html>
<html>
    <head>
        <title>Onetiks</title>
        <link rel="icon" href="resourses/ONECLICK.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter&display=swap" rel="stylesheet">

    </head>
    <body class="body1">
        <!--navbar-->
        <div class="logo" style="padding: 10px; background-color: #fff;"">
            <h1 style="font-family: 'Varela Round', sans-serif;">Onclick</h1>
        </div>
        <!--navbar-->

        <!--header-->
        <img class="backgroundimgpc" src="resourses/Black and White Modern Fashion & Clothing  Photo Collage YouTube Thumbnail.png" alt="">
            <div class="container" id="main">
            <p class="title02"></p>
            <!--header-->


            <!--alert-->
            <span class="text-danger" id="msg"></span>
            <div class="col-6 d-none" id="msgdiv">
            <div class="alert alert-danger" role="alert" id="msg">
            </div>
            </div>
            <!--alert-->


            <!--signupbox-->
            <div class="sign-up" id="SignUpBox">
                <form action="#">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social"><i class="bi bi-google"></i></a>
                        <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <p>or use your email for registration</p>
                    <input class="input1" type="text" name="text" placeholder="Name" id="name" required="">
                    <input class="input1" type="email" name="email" placeholder="Email" id="email" required="">
                    <input class="input1" type="Mobile" name="Mobile" placeholder="076000000" id="mobile" required="">
                    <input class="input1" type="password" name="password" placeholder="Password" id="password" required="">
                    <label  class="gender"></label>
                                <select class="form-select" id="gender">
                                    <option value="0">Select Your Gender</option>
                        <?php
                        require "connaction.php";

                        $rs = Database::search("SELECT * FROM `gender`");
                        $n=$rs->num_rows;

                        for($x=0; $x < $n; $x++){
                            $d = $rs->fetch_assoc();
                        ?>
                        <option value="<?php echo $d["id"];?>"><?php echo $d["gender_name"];?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <a class="Createna" href="#" onclick="ChangeView();">Already I have Account</a>
                    <button class="button1" onclick="signUp();">sign up</button>    
                </form>
            </div>
            <!--signupbox-->


            <!--signinbox-->
            <div class="sign-in" id="SignInBox">
                <form action="#">
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social"><i class="bi bi-google"></i></a>
                        <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <p>or use your account</p>
                    <?php
                    $email = "";
                    $password = "";

                    if(isset($_COOKIE["email"])){
                        $email = $_COOKIE["email"];
                    }

                    if(isset($_COOKIE["password"])){
                        $password = $_COOKIE["password"];
                    }
                    ?>
                    <input class="input1" type="email" name="email" placeholder="Email" id="email2"  value="<?php echo $email;?>">
                    <input class="input1" type="password" name="password" placeholder="Password" id="password2"  required=""  value="<?php echo $password; ?>">
                    <a href="#" onclick="forgotPassword();">Froget you Password</a>
                    <a class="Createna" href="#" onclick="ChangeView();">Create New Account</a>
                    <button class="button1" onclick="signin();">sign In</button>
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="1" id="rememberme" />
                    <label class="form-check-label" for="rememberme">
                    Remember Me
                    </label>
                </div>               
                </form>
            </div>
                            
            <!--signinbox-->

            <!--overlay container-->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h1>Wellcome Back</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="button1" id="signIn">sign In</button>
                    </div>
                    <div class="overlay-right">
                        <h1>Wellcome</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="button1" id="signUp">sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <!--overlay container-->
    <div class="col-12">
    <div class="row">
        </div>
        <div class="card-group" style="max-width: 100%; position: absolute; top: 110%; border-color: #fff; border-width: 2px;">
            <div class="card" style="background-color: #eeee; border-color: #fff; border-width: 2px; ">
            <img src="resourses/night-wear collection by nils_150623.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="color: #696969; ">
                <h5 class="card-title">NIGHTWEAR</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card" style="background-color: #eeee; border-color: #fff; border-width: 2px;">
                <img src="resourses/image 2.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="color: #696969;">
                <h5 class="card-title">READ MORE</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card" style="background-color: #eeee; border-color: #fff; border-width: 2px; ">
                <img src="resourses/image 1.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="color: #696969;">
                <h5 class="card-title">HANDBAG</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <!-- <div class="card mb-3 nike" style="max-width: 1000px; position: absolute;background-color: #eeee; top: 105%; border-color: #fff; border-width: 2px; ">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="resourses/nike.webp" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body" style="color: #696969;">
                    <h5 class="card-title">Nike Air</h5>
                    <p class="card-text"  style="font-size: 21px;">Nike Air technology consists of pressurised air inside a tough yet flexible bag, 
                        and provides more flexibility and spring without compromising structure. The Air-Sole units maintain
                         their given form with elasticity, reduce impact and keep the shoe snug and lightweight. 
                         Nike shoes are a good brand that you can wear. Nike is one of the best brands that you can 
                         obtain these days. These shoes are made to use them
                          in some sports. This shoe provides the user great
                           comfort and effectiveness in the activities. This
                            brand also made different designs in accord with the different sports that exist in the world. 
                            </p>
                    
                </div>
            </div>
        </div> -->

    </div>
           <!-- modal -->
           
           
              <!-- modal -->

            <!--copyright text-->
            
            
            </div>
            
            
    </div>
    
        
        
        <!--copyright text-->
        <div class="modal" tabindex="-1" id="forgotPasswordModal">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" onclick="forgotPassword();">Forgot Password?</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="row g-3">

                                  <div class="col-6">
                                      <label class="form-label">New Password</label>
                                      <div class="input-group mb-3">
                                          <input type="password" class="form-control" id="np" />
                                          <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();">
                                              <i class="bi bi-eye"></i>
                                          </button>
                                      </div>
                                  </div>

                                  <div class="col-6">
                                      <label class="form-label">Retype New Password</label>
                                      <div class="input-group mb-3">
                                          <input type="password" class="form-control" id="rnp" />
                                          <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();">
                                              <i class="bi bi-eye"></i>
                                          </button>
                                      </div>
                                  </div>

                                  <div class="col-12">
                                      <label class="form-label">Verifiction Code</label>
                                      <input type="text" class="form-control" id="vc" />
                                  </div>

                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset Password</button>
                          </div>
                      </div>
                  </div>
              </div>
    </div>

</div>
<div class="col-12 fixed-bottom  d-lg-block" style="position: absolute; top: 220%;">
            <?php include "footer.php"; ?>
            </div>

         
     <script src="script.js"></script>
     <script src="bootstrap.js"></script> 
    </body>
</html>


    