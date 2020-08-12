<?php 
include 'header.html';
?>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="#" class="current">Approval Request</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      <?php 
                    require_once 'follow.php';
                    $csm = new Follow();   
                    $customer= new Follow();                 
                    $resultdr = $customer->getData("SELECT * FROM customer where active = 1;");
                    $resultmsg = $customer->getData("SELECT * FROM msg order by id DESC;");
                  
                    ?>

 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Send Bulk Message</h5> 
          </div>
          <div class="widget-content nopadding">
           
          <form method="post" action="save_request.php">



              <div align="center" class="control-group">
                <label class="control-label">Text Message :</label>
                <div class="controls">
                    <select name="message" class="form-control">
                        <?php foreach($resultmsg as $res){
                            echo "<option value='".$res['id']."'>".substr($res['text'],0,60)."</option>";
                        }?>
                    </select>

                </div>
              </div>

<table class="table table-bordered">
    
<thead> <caption>Customer</caption>
<tr>    
    <th><input type="checkbox" id="checkAl"> Select All</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
</tr>
</thead>
<?php
$counter=0;

$resultc = $csm->getData("SELECT * FROM driver order by id DESC;");
                foreach ($resultc as $res) {
?>
   <tr> <td><input  type="checkbox" id="checkItem" name="check[]" value="<?php echo $res["id"]; ?>"></td>
<?php
                    echo " 
                    <td>" . $res['full_name'] . "</td>
                    <td>" . $res['phone'] . "</td>
                          <td>" . $res['email'] . "</td>    
                        </tr>";                                                                                                                                                                                                                                                                                                                                     
                    $counter++;
                }
                ?>
</table>                                                                                                                                        
<p align="center"><button type="submit" class="btn btn-success" name="save">Request for Approval</button></p>
</form>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>                                                                                                                                                                                                                   

           
           </div>
        </div>
        </div>
            
        <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Bulk Message</h5>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Message</th>
                  <th>Status </th>
                  <th>Bulk Receiver</th>
                  <!-- <th>Action</th> -->
               
                </tr>
              </thead>
               <tbody>
               <?php 
          $user_id=$_SESSION['ind'];               

                $counter = 1;
                $result = $csm->getData("SELECT * FROM bulk_msg where created_by = $user_id order by id DESC;");
                foreach ($result as $res) {
                 $msg_id = $res['msg_id'];
                  $smsg = $csm->getData("SELECT * FROM msg where id = $msg_id;");
                  $arr = explode(" ", $res['bulk_receiver']); 
                    echo " <tr>
                          <td>" . $counter . "</td>
                          <td>";
                          $msgre=$smsg[0]['text'] ;
                          if(strlen($msgre) > 50){
                            echo substr($msgre,0,50)."...";
                          }else { echo $msgre;}
                           echo "</td>


                          <td>";
                          if($res['status']== 1) echo "Approved"; else echo "undetermined";
                           echo "</td>
                     
                           <td>
                           
                           ";
                          $bulkctr=0;
                  foreach ($arr AS $index => $value)
                  {  $arr[$index] = (int)$value; 
                     
                    $idb= $arr[$index];
                     if($idb > 0){
                     
                     $cresult= $csm->getData("SELECT * FROM driver where id = $idb DESC;");
                     echo strtoupper(substr($cresult[0]['full_name'],0,5))." ";;
                    if($bulkctr > 5) echo "...";
                     break;   
                  }
                      $bulkctr++;
                  }
                     echo "</td>";
                        // <td >
                        
                        // <div class=\"pull-right a\"> <a class=\"tip-bottom\" href='edit_customer.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                        //  <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this csm?')\" href='delete_customer.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                        //  </td>
                     echo  " </tr>";
                    $counter++;
                }
                ?> </tbody>
                </table>
         </div>
          </div>
          </div>
          </div>


          </div>
        </div>
      </div>
     
<?php
// include   'footer.html';   

?>