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
                $user_id = $customr->escape_string($_POST['user']);
                $access = $customr->escape_string($_POST['access']);
                $result = $customr->execute("INSERT INTO `access_right`( `user_id`, `prevelage_id`)
                VALUES ('$user_id','$access')");

                               if ($result) {
                                echo "<br/><a href='javascript:self.history.back();' class='form-control'>Go Back</a>";
                              

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