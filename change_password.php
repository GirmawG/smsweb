<?php
include_once 'header.html';
include_once 'CRYPT_KEY.php';
?>

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
     <a href="change_pass.php" class="current">Change Password</a> </div>
    </div>
    <div class="container-fluid">
      <hr>

 <div class="row-fluid">
        <div class="span6">
<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Changing Password progress</h5>
          </div>
     
<?php
$usr = new Follow();
$success = "";
$error = "";
if (isset($_POST['reset'])) {
  $old_password = $usr->escape_string($_POST['current_password']);
  $new_password = $usr->escape_string($_POST['new_password']);
  $confirm_password = $usr->escape_string($_POST['confirm_password']);
  
  $user_id = $_SESSION['email'];

  $old_password = crypt($old_password, CRYPT_KEY);
  $counter = 0;
  
  $result = $usr->getData("SELECT * FROM smsadminuser WHERE email='$user_id' AND password='$old_password' ");
  foreach ($result as $key => $res) {
    $counter = 1;
    break;  
  }
  if ($counter == 1) {
    $check_same = strcmp($new_password, $confirm_password);
    if ($check_same == 0) {

     $new_password = crypt($new_password, CRYPT_KEY);
      $result = $usr->execute("UPDATE  smsadminuser SET password='$new_password' WHERE email  ='$user_id'");
      $error = "<div  class='alert alert-success' >
      Yor password have been changed successfully.
      </div>";
    } else {
      $error = "<div class='alert alert-danger'> Password doesn't match. </div>";
    }
  } else {
    $error = "<div class='alert alert-danger'> Incorrect Password. </div>";
  }

}

echo $error;

?>


       </div>
        </div>
      </div>
</div>

<?php
include_once 'footer.html';
?>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<!-- <script src="js/bootstrap.min.js"></script>  -->
<script src="js/jquery.uniform.js"></script> 

<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<!-- <script src="js/matrix.js"></script>  -->
<script src="js/matrix.tables.js"></script>