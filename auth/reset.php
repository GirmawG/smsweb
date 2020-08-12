<?php
//
require_once '../../php/member.php';
require_once '../../Validation/validation.php';
require_once '../../Validation/CRYPT_KEY.php';
 //creating object instance of the class
$memb = new Member();
$validation = new Validation();
$success = "";
$error = "";
if (isset($_POST['reset'])) {
  $old_password = $memb->escape_string($_POST['old_password']);
  $new_password = $memb->escape_string($_POST['new_password']);
  $confirm_password = $memb->escape_string($_POST['confirm_password']);
  session_start();
  $email = $_SESSION['email'];
  $password = crypt($old_password, CRYPT_KEY);
  $counter = 0;
  $result = $memb->getData("SELECT * FROM users WHERE email='$email' AND password='$password' ");
  foreach ($result as $key => $res) {
    $counter = 1;
    break;
  }
  if ($counter == 1) {
    $check_same = strcmp($new_password, $confirm_password);
    if ($check_same == 0) {

      $error = "success";
      $password = crypt($new_password, CRYPT_KEY);
      $result = $memb->execute("UPDATE  auth SET password='$password' WHERE user_id='$email'");
      $success = "Yor password have been changed successfully.";
    } else {
      $error = "Password doesn't match.";
    }
  } else {
    $error = "Incorrect Password";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="../../../Images/Icons/esa_logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ESA</title>
    <!-- css stylesheets -->
    <link href="../../../publicuser/file/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../publicuser/file/css/style.css" rel="stylesheet">
  <link href="../../../publicuser/file/css/menu.css" rel="stylesheet">

</head>

<body>
  

  <!-- fixed navigation bar -->
  <div  style="background:white;" class="navbar navbar--top navbar-inverse" role="navigation">
  <br/>

        <div class="container">
      <div class="navbar-header" >
        <button type="button" id="head" class="navbar-toggle" data-toggle="collapse" data-target="#b-menu-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button><div class="container " >
        <img class="navbar-brand img-top" id="bg_logo" alt="Icon Not Found" src="../../../Images/Icons/background_logo.jpg" >
 </div></div>
  <div class="collapse navbar-collapse" id="b-menu-1">
        <ul class="nav navbar-nav navbar-left" id="menu">
          <li><a href="../../php/home.php" class="glyphicon glyphicon-home" id="head">HOME</a></li>
          <li class="dropdown "  >
            <a href="#" class="dropdown-toggle glyphicon glyphicon-fee" id="head" data-toggle="dropdown">
              FEE<span ><b class="caret"></b></span> </a>
            <ul class="dropdown-menu">
            <li><a href="../../php/fee_form.php">Pay</a></li>
            <li><a href="../../php/fee_history.php">Fee History</a></li>
              </ul>
          </li>
         <li class="dropdown" style="float:right;">
            <a href="#" class="dropdown-toggle glyphicon glyphicon-user" id="focus" data-toggle="dropdown" >
              <span ><b class="caret"></b></span></a>
            <ul class="dropdown-menu">
            <li><a href="../../php/profile.php">Profile </a></li>
            <li><a href="changepaswd.php">Change password </a></li>
              <li><a href="logout.php">Logout </a></li>
              </ul>
          </li>
                  </ul> </div> <!-- /.nav-collapse -->
    </div> <!-- /.container -->
  </div> <!-- /.navbar -->


  <!-- main container -->
  <div class="container">

    <!-- 2-column layout -->
    <div class="row row-offcanvas row-offcanvas-right" >
      <div class="col-xs-12 col-sm-9">

        <div>
           <!-- slider -->
      </div><!-- /column 3 (sidebar) -->

    </div>
    <!--/row-->
 <!-- box 4 -->
 <div class="panel panel-success">
              <div class="panel-heading" id="head">
              
              <h3 class="panel-title">Reset Passwod</h3>
              </div>
              <div class="panel-body">
    
              <div class="content clearfix">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items">
        <div class="field-item even" property="content:encoded">

<form class="form" method="POST" action="changepaswd.php" style="width:30%;margin-left:35%;">
<fieldset>
    <legend>Reset Password</legend>
    <?php
    if (!$error == "") {

      if ($error == "success") { ?>
           <div id="success"  class="alert alert-success" style="width: 100%;">
             <?php echo $success; ?>
           </div>
          <?php 
        } else { ?>
           <div id="error"  class="alert alert-danger" style="width: 100%;">
            <span><?php echo $error; ?>
            </span>
           </div>
          <?php 
        }
      } ?>  
        Old Password:<b id="required">*</b><input type="password" name="old_password" class="form-control" ><br>
        New Password:<b id="required">*</b><input type="password" name="new_password" class="form-control" ><br>
        Confirm Password:<b id="required">*</b><input type="password" name="confirm_password" class="form-control" ><br>
        <input type="submit" class="btn btn-success"  id="head" name="reset" value="reset">
</fieldset>

        
        </form>
        </div></div></div>  </div>
             </div>
            </div>
          </div> <!-- /column 2 -->
<hr>
    <footer>
    <nav class="navbar navbar-default navbar-static-bottom" role="navigation" id="head">
<p class="navbar-text" id="text">&copy2018 Ethiopian Statistical Association </p>
<div class="navbar-text navbar-center"><a id="head" href="../../../publicuser/php/contact_us.php">Contact Us</a> </div>
</nav>
    </footer>

  </div>
  <!--/.container-->

  <!-- add javascripts -->
  <script src="../../../publicuser/file/js/jquery.js"></script>
  <script src="../../../publicuser/file/js/bootstrap.min.js"></script>
</body>

</html>

