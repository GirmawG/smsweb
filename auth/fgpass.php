<?php
//
require_once '../php/member.php';
require_once '../../validation/validation.php';
require_once '../../validation/key.php';
 //creating object instance of the class
$memb = new member();
$validation = new Validation();
$success = "";
$error = "";
if (isset($_POST['send'])) {

  $email = $memb->escape_string($_POST['email']);

  if ($validation->email_exists($email)) {
    $to = $email;

    $subject = "HTML email";
    $message = "
                        <html>
                        <head>
                        <title>Forget password </title>
                        </head>
                        <body>
                        <a href='../home.php?email='" . $email . "' class=\"form-control\">Reset Password</a>
                        </body>
                        </html>
                        ";
    $headers = "MIME-Version: 1.0";
    $headers .= "Content-type:text/html;charset=UTF-8";
                        
                        // More headers
    $headers .= 'From: hailugebretsadike1@gmail.com';

    if (mail($to, $subject, $message, $headers)) {
      $error = "Check your Email ";
    } else {
      $error = "Unable to send a link";;
    }
  } else {
    $error = "Invalid Email,please try again.";
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
          <li><a href="../../../publicuser/php/index.php" class="glyphicon glyphicon-home" id="focus">HOME</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="head">ABOUT US</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../../../publicuser/php/law.php">By-law of ESA</a></li>
              <li><a href="../../../publicuser/php/profile.php">ESA Profile</a></li>
              <li><a href="../../../publicuser/php/vision.php">Vision</a></li>
              <li><a href="../../../publicuser/php/mission.php">Mission</a></li>
              <li><a href="../../../publicuser/php/objective.php"> Objective</a></li>
              <li><a href="../../../publicuser/php/governance.php"> Governance</a></li>
              <li><a href="../../../publicuser/php/strategic.php"> Strategic Plan</a></li>
              <li><a href="../../../publicuser/php/stafflist.php">Administrative Staff List</a></li>
                           </ul>
          </li>    
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="head">CONFERENCE</span><b class="caret"></b></a>
            <ul  class="dropdown-menu">
              <li class="anc">        
               <a href="#"  id=head>Annual Conference<b class="caret-right"></b></a>
               <ul   class="anc-content"  >
              <li><a href="../../../publicuser/php/callfabstract.php">Call for abstract</a></li>
               <li  ><a href="../../../publicuser/php/callfpaper.php">Call for paper</a></li>
               </ul>
               </li>
              <li><a href="#">Workshops</a></li>
           </ul>
          </li>   

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="head" data-toggle="dropdown">PUBLICATION<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../../../Events/publications/jesa/php/viewjesa.php">JESA </a></li>
              <li><a href="../../../Events/publications/proceeding/php/viewproc.php">Proceeding </a></li>
              <li><a href="../../../Events/publications/Newsletter/php/viewnewsletter.php">Newsletter </a></li>
             <li><a href="../../../publicuser/php/collection.php">Reference Books in ESA Library </a></li>
              <li><a href="../../../publicuser/php/report.php">Activity Report Plan</a></li>
              </ul>
          </li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="head"  data-toggle="dropdown">MEMBERSHIP<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../../../publicuser/php/generalmemb.php">General information </a></li>
              <li><a href="../../../publicuser/php/service.php">Membership Services </a></li>
              <li><a href="../../../publicuser/php/chapter_office.php">Chapter Offices </a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="head" data-toggle="dropdown">TRAINING<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../../../publicuser/php/training.php">Software Training </a></li>
              <li><a href="../../../publicuser/php/research.php">Research Methodology </a></li>
              <li><a href="../../../publicuser/php/topic.php">Special Statistics Topics </a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="head" data-toggle="dropdown"><span >PROJECT<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Educaton </a></li>
              <li><a href="#">Health </a></li>
              <li><a href="#">Agriculture</a></li>
              <li><a href="#">Industry</a></li>
              <li><a href="#">Service</a></li>
            </ul>
          </li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="head"  data-toggle="dropdown"><span >MEDIA<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="">Audio </a></li>
              <li><a href="#">Films </a></li>
              <li><a href="#">Photos</a></li>
              <li><a href="#">Slideshare</a></li>
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
              
              <h3 class="panel-title">Forget Passwod</h3>
              </div>
              <div class="panel-body">
    
              <div class="content clearfix">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items">
        <div class="field-item even" property="content:encoded">

<form class="form" method="POST" action="fgpass.php" style="width:30%;margin-left:35%;">
<fieldset>
    <legend>Send Email Link</legend>
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
      } ?>    Email:<b id="required">*</b><input type="text" name="email" class="form-control" ><br>
    <input type="submit" class="btn btn-success"  id="head" name="send" value="Send">
</fieldset>

        
        </form>
        </div></div></div>  </div>
             </div>
            </div>
          </div> <!-- /column 2 -->
<hr>
    <footer>
    <nav class="navbar navbar-default navbar-static-bottom" role="navigation" id="head">
<p class="navbar-text" id="head">&copy2018 Ethiopian Statistical Association </p>
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


    