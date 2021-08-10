<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("i.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>
<?php include "header.php"; ?>
<!-- Navbar (sit on top) -->


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Vardhaman College Of Enginnering</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Vardhaman College Of Enginnering</span><br>
    <span class="w3-large">Performance tracker on Online Judges</span>
    <p><a href="" data-toggle="modal" data-target="#myModal" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Student Login</a></p><br>
    <p><a href="" data-toggle="modal" data-target="#myModal" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Admin Login</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>INDU REDDY POTLA</h3>
          <p class="w3-opacity">18881A05A7</p>
          <p class="w3-opacity">indupotla26@gmail.com</p>
          <p><a href="#contact"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>LIKHITHA BANDARI</h3>
          <p class="w3-opacity">18881A05J9</p>
          <p class="w3-opacity">likithabandari@gmail.com</p>
          <p><a href="#contact"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        
        <div class="w3-container">
          <h3>SAI SHIVANI RACHERLA</h3>
          <p class="w3-opacity">18881A04G7</p>
          <p class="w3-opacity">saishivanir20@gmail.com</p>
          <p><a href="#contact"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        
        <div class="w3-container">
          <h3>VENKATESH S</h3>
          <p class="w3-opacity">18881A04N7</p>
          <p class="w3-opacity">sulegamvenkat@gmail.com</p>
          <p><a href="#contact"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        
        <div class="w3-container">
          <h3>SAI ABHINAV ENDRAPU</h3>
          <p class="w3-opacity">18881A1215</p>
          <p class="w3-opacity">endrapu.saiabhinav@gmail.com</p>
          <p><a href="#contact"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>SUNDARA SANNUTHI</h3>
          <p class="w3-opacity">18881A02266</p>
          <p class="w3-opacity">sannuthi96@gmail.com</p>
          <p><a href="#contact"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Hyderabad, India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2>Admin/Student Login</h2>
                        </div>

            </div>
                        <div class="panel-body">
                            <!-- <h4><i>Login to make a purchase</i></h4> -->
                              <?php  if(isset($_GET['error']) && $_GET['error']==='wrong_credentials'){
                  echo '<p style="color:red;text-align:center;"> Wrong credentials </p>';
              }else if(isset($_GET['error']) && $_GET['error']=="NotAUser"){
                  echo '<p style="color:red;text-align:centr;">Not a user</p>';
              }
           ?>
                            <form method="post" action="loginScript.php">
                                <div class="form-group">
                                    <input type="email" placeholder="email" id='input1' class="form-control" name="email" required>
                            </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" id="input2" name="password" class="form-control" required>
                                </div>
                                <input type="submit" value="Login" class="btn btn-primary" >
                            </form>
                            <div>
                            New User <a href="pat_signup.php">SignUp!</a>
                            </div>  
                        </div>
                        <!-- <div class="panel-footer">
                            <h4>Don't have an account? <a href="signup.php">Register</a></h4>
                        </div> -->
                    </div>
      </div>
    </div>

  </div>

 


<!-- <script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<!-- <script> -->


<?php 
    if(isset($_GET['error'])){ ?>
     <script> $('#myModal').modal('show'); </script>
   <?php } ?>
</body>
</html>
