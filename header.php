<?php    

?>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="pat_home.php" class="w3-bar-item w3-button w3-wide">VCE</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <?php if(isset($_SESSION['email']) and isset($_SESSION['name'])){ ?>
        <span class="w3-bar-item w3-button">Welcome..<?php  echo $_SESSION['name'];?></span>
        <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGOUT</a> 
      <?php  }else{ ?>
        <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <?php } ?>
    </div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
