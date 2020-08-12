<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="user.php" class="current">User</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      
      <?php
        require_once 'follow.php';
        include_once 'CRYPT_KEY.php';
        $customr = new Follow();

        if (isset($_POST['save'])) {
            try {
                $full_name = $customr->escape_string($_POST['full_name']);
                $phone = $customr->escape_string($_POST['phone']);
                $email = $customr->escape_string($_POST['email']);
                $password = $customr->escape_string($_POST['password']);
                $cpassword = $customr->escape_string($_POST['cpassword']);
                    if(strcasecmp($password,$cpassword)==0){
                        $password = crypt($password, CRYPT_KEY);
                        $result = $customr->execute("INSERT INTO `smsadminuser`( `full_name`, `phone`, `email`,`password`)
                        VALUES ('$full_name','$phone','$email','$password')");
        
                                       if ($result) {
                   ?>
        
            <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                      <h4 class="alert-heading">Success!</h4>
                      User saved successfully
                      </div> 
                    <?php 
                    echo "<br/>Full Name :" . $full_name;
                    echo "<br/>Phone :" . $phone;
                    echo "<br/>Email Name :" . $email;
                   
        
        
                 } else { 
                    ?><div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                      <h4 class="alert-heading">Error!</h4>
                      Customer not saved successfully </div>
         <?php
        
        }
                    }
                
} catch (Exception $e) {
    echo "Error" . $e;
    echo "<br/><a href='javascript:self.history.back();' class='form-control'>Go Back</a>";

}
}

?>
 </div>
        </div>
      </div>   

<?php
include_once 'footer.html';
?>