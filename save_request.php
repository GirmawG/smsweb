<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="customer.php" class="current">Ree</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      
      <?php
        require_once 'follow.php';
        $customr = new Follow();

        if (isset($_POST['save'])) {
            try {
                $msg = $customr->escape_string($_POST['message']);
                $checkbox = $_POST['check'];
                $bulk="0";
               
                for($i=0;$i<count($checkbox);$i++){
                    $st=strval($checkbox[$i]);
                    $bulk = $bulk." ".$st;
                }             
                      
                
                // echo $user_id." ".$bulk ." ".$msg;
                // exit();
               $result = $customr->execute("INSERT INTO `bulk_msg`(`msg_id`, `bulk_receiver`, `created_by`) VALUES (
                   '$msg','$bulk','$user_id'
               )");
if($result){
                              
                      ?>
                      
                      <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">success!</h4>
              Your Approval request sent successfully! </div>
                      <?php          
  echo "<br/><a href='javascript:self.history.back();' class='btn btn-primary form-control'>Go Back</a>";
}else{ 
            ?><div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              Approval not sent successfully </div>
 <?php


}   }catch (Exception $e) {
    echo "Error" . $e;
    echo "<br/><a href='javascript:self.history.back();' class='form-control'>Go Back</a>";

}}

?>
 </div>
        </div>
      </div>   

<?php
include_once 'footer.html';
?>