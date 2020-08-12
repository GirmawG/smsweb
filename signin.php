<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="../images/user.png" type="image/png">
	<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	 -->
	<!-- Animate.css -->
	<link rel="stylesheet" href="lg/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="lg/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="lg/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="lg/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="lg/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="lg/css/owl.carousel.min.css">
	<link rel="stylesheet" href="lg/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="lg/css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link href="style.css" type="text/css" rel="stylesheet" />
    <script src="../js/jquery-3.3.1.js" type="text/javascript"></script>
   <script src="../js/script.js" type="text/javascript"></script>		
   <style>
    .black{
        color: black;
    }
    .black:hover{
        color: black;
    border-bottom: 1px black solid;
    }
    .un{
        color: black;
    border-bottom: 1px black solid;
          }
          .footer{position: fixed;
  bottom: -10px;
margin-left:14%;

} .logo{

            color:wheat;background: #7c7eec;border:2px double wheat;
          }
   </style>
  <?php
//  require_once 'header.html';
 ?> <div class="container">
<div class="form-group">
 <hr style="margin-top:-5px;"/>

       </div>
 <div id="colorlib-page" style="margin-top:5%;">
		<div class="container-wrap">
<div id="colorlib-main">
 <script>
function validateForm() {
    
  var username = document.forms["login"]["username"].value.trim();
  var password = document.forms["login"]["password"].value;
    if ((username === "")||(password==="")) {
     var error=document.getElementById("error").innerHTML="username and Password must be filled out";
     document.getElementById("error").style.display="block";
      //alert("username and Password must be filled out");
        return false;
    }
    
}
</script>
<div class="col-md-7 col-md-push-1">
 	<div class="row" >
     
<h4>Welcome to Adika Taxi web SMS</h4>
           <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight"> 
         <h4 style="margin-top:5%;">Login</h4>					
              <form action="auth/login.php" method="POST" name="login" class="form"  role="form" name="login" onsubmit="return validateForm()">
              <span id="error" style="height:60px;display:none;" class="form-control alert alert-danger"></span>
              <div class="form-group">
                  <span >Email:</span>
                    <input type="text" name="email" class="form-control" placeholder="Enter email" />
                </div>

                <div class="form-group">
                  <span >Password: </span>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" />
                </div>

                 <div class="form-actions">
                  <button type="submit" name="login" class="btn btn-success" id="to-login">Login</button>
                </div>  
                </form>
            
              </div>
          
</div></div></div></div></div></div>
<footer class="footer">
    <p><small>Adika &copy; 
<script>document.write(new Date().getFullYear());</script>
powered by Adika IT Team</small></p>

</footer>  
