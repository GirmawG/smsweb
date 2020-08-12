<?php 
include 'header.html';
?><script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      ><a href="index.php" class="current">SMS</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
 <?php 
                    require_once 'follow.php';
                    $follw = new Follow();   
                    $customer= new Follow();                 
                    $resultdr = $customer->getData("SELECT count(*) as num FROM received_msg;");
                    $resultsent = $customer->getData("SELECT count(*) as num FROM message where sender=7000;");
                    $resultdriver = $customer->getData("SELECT count(*) as num FROM driver");
                    $resultcustomer = $customer->getData("SELECT count(*) as num FROM customer");
                    $resultotp= $customer->getData("SELECT count(*) as num FROM otp");
                    ?>
</div>
<h3 align="left"> <i> Dashboard  </i> </h3>
<div class="container">
<div class="row">
    <div class="col-md-3">
      <div class="card-counter success">
        <i class="icon icon-envelope"></i>
        <span class="count-numbers"><?php echo $resultsent[0]['num']; ?></span>
        <span class="count-name">Sent Messages</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="icon icon-envelope"></i>
        <span class="count-numbers"><?php echo $resultdr[0]['num']; ?></span>
        <span class="count-name">Received Messages</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="icon icon-key"></i>
        <span class="count-numbers"><?php echo $resultotp[0]['num']; ?></span>
        <span class="count-name">OTP SENT</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="icon icon-user"></i>
        <span class="count-numbers"><?php echo $resultdriver[0]['num']; ?></span>
        <span class="count-name">Total Drivers</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card-counter info">
        <i class="icon icon-user"></i>
        <span class="count-numbers"><?php echo $resultcustomer[0]['num']; ?></span>
        <span class="count-name">Total Customers</span>
      </div>
    </div>

    <!-- <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers">599</span>
        <span class="count-name">Received Messages</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">OTP SENT</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="icon icon-user"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">Users</span>
      </div>
    </div> -->
  </div>
</div>

</div>


<!-- <div class="card" align="center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Received message</h5>
    <p class="card-text"><?php //echo $resultdr[0]['num']; ?></p>
    <a href="received_msg.php" class="btn btn-primary">see detail</a>
  </div>

</div>
<hr/>
<div class="card" align="center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Sent message</h5>
    <p class="card-text"><?php //echo $resultsent[0]['num']; ?></p>
    <a href="index.php" class="btn btn-primary">see detail</a>
  </div>

</div> -->
</div>
          </div>
        </div>
      </div>
     
<?php
include 'footer.html';

?>
