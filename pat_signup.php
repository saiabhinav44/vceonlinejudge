<!DOCTYPE>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	   
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <style>

.w3-bar .w3-button {
  padding: 16px;
}
	   </style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">VCE</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="pat_home.php#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="pat_home.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<div class="section">
    	<div class="nav" style="margin-left: 640px;">
    		
			<form action="http://localhost/pat/pat_studentScript.php" method="post">
				<div style="position:relative;height:80px;margin-top: 100px;">
					<h1><b style="color: blue;">Student Registration</b></h1><br>
					Name : <input type="text" name="name" placeholder="Name" ><br><br>
					Email ID : <input type="email" name="email" placeholder="Email Id" ><br><br>
					Create Password : <input type="password" name="password" placeholder="Password" ><br><br>
					Rollno : <input type="text" name="rollno" placeholder="Rollno" ><br><br>
					Branch :  <select name="branch">
								<option value="">--SELECT--</option>
								<option value="CSE">CSE</option>
								<option value="IT">IT</option>
								<option value="ECE">ECE</option>
								<option value="EEE">EEE</option>
								<option value="MECH">MECH</option>
								<option value="CIVIL">CIVIL</option>	   
							   <select><br><br>
					Passout Year : <input type="text" name="pyear" placeholder="Passout Year" ><br><br>
					Spoj Username : <input type="text" name="spoj" placeholder="Spoj Username" ><br><br>
					CodeChef Username : <input type="text" name="codechef" placeholder="CodeChef Username" ><br><br>
					Codeforces Username : <input type="text" name="codeforces" placeholder="Codeforces Username"><br><br>
					<input type="submit" style="margin-left: 100px;" name="Register" value="Register" />
				</div>
			</form>
		
		</div>
</div>


<div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <?php  if(isset($_GET['error'])){  ?>
        <h4 class="modal-title"><span style="color:red;">Error Message</span></h4>
        <?php } else if(isset($_GET['msg'])){ ?>
            <h4 class="modal-title"><span style="color:green;">Success Message</span></h4>
        <?php } ?>
      </div>
      <div class="modal-body">
           <?php  if(isset($_GET['error'])){
                if($_GET['error']=="map_cos_pos"){
                    echo "<p>Atleast Map one courseOutcoms to ProgramOutcomes</p>";
                }
                else if($_GET['error']=="emailexist"){
                    echo "<p>email alredy exists</p>";
                }
                else if($_GET['error']=="invalidpassword"){
                    echo "<p>Entered password is not valid </p>";
                } 
                else if($_GET['error']=="invalidcodeforce"){
                    echo "<p>Entered codeforce username is invalid </p>";
                }
                else if($_GET['error']=="invalidcodechef"){
                    echo "<p>Entered codechef username is invalid </p>";
                }   
                else if($_GET['error']=="invalidspoj"){
                    echo "<p>Entered spoj username is invalid </p>";
                } 
                else if($_GET['error']=="invalidPyear"){
                    echo "<p>Entered invalidPyear is invalid </p>";
                } 
                else if($_GET['error']=="invalidbranch"){
                    echo "<p>Entered branch is invalid </p>";
                } 
                else if($_GET['error']=="invalidrollno"){
                    echo "<p>Entered rollno is invalid </p>";
                } 
                else if($_GET['error']=="invalidemail"){
                    echo "<p>Entered email is invalid </p>";
                } 
                else if($_GET['error']=="invalidname"){
                    echo "<p>Entered name is invalid </p>";
                } 

           }
           else if(isset($_GET['msg'])){
               echo "<p>Succesfully inserted data</p>";
           }        
               ?>
      </div>

  </div>
</div>
    </div>

	<?php 
    if(isset($_GET['error']) or isset($_GET['msg'])){ ?>
     <script> $('#myModal').modal('show'); </script>
   <?php } ?>
</body>
</html>