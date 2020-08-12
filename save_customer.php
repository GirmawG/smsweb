<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="customer.php" class="current">Customer</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      
      <?php
        require_once 'follow.php';
        $customr = new Follow();

        if (isset($_POST['save'])) {
            try {
                $full_name = $customr->escape_string($_POST['full_name']);
                $phone = $customr->escape_string($_POST['phone']);
                $email = $customr->escape_string($_POST['email']);
                $gender = $customr->escape_string($_POST['gender']);
                $address = $customr->escape_string($_POST['address']);

              // echo $full_name." ".$phone." ".$email." ".$gender." ".$address;
              // exit(1); 


                $result = $customr->execute("INSERT INTO `customer`( `full_name`, `phone`, `email`,`gender`,`address`)
                VALUES ('$full_name','$phone','$email','$gender','$address')");

                               if ($result) {
           ?>

    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
              Customer saved successfully
              </div> 
            <?php 
            echo "<br/>Full Name :" . $full_name;
            echo "<br/>Phone :" . $phone;
            echo "<br/>Email Name :" . $email;
            echo "<br/>Gender :" . $gender;
            echo "<br/>Address :" . $address;
           


         } else { 
            ?><div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              Customer not saved successfully </div>
 <?php

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