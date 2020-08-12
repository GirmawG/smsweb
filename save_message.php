<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="message.php" class="current">Text Message</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      
      <?php
        require_once 'follow.php';
        $msg = new Follow();

        if (isset($_POST['save'])) {
            try {

              $message = $msg->escape_string($_POST['message']);
              

                $result = $msg->execute("INSERT INTO `msg`( `text`)
                VALUES ('$message')");
                               if ($result) {
           ?>

    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
              msg saved successfully
              </div> 
            <?php 
            echo "<br/>TEXT MESSAGE :" . $message;
           


         } else { 
            ?><div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              msg not saved successfully </div>
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