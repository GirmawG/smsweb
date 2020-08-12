<?php 
include 'header.html';
?><script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      ><a href="index.php" class="current">SMS</a> </div>
    </div>
    <div class="container-fluid">
      <hr>

 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>New Message </h5>
          </div>
          <div class="widget-content nopadding">
            <form action="send_sms.php" method="POST" name="save" onsubmit="return validatefollow();" class="form-horizontal">
                  <?php 
                    require_once 'follow.php';
                    $follw = new Follow();   
                    $customer= new Follow();                 
                    $resultdr = $customer->getData("SELECT * FROM message;");
                  
                    ?>

              
              <div class="control-group">
                <label class="control-label">TO :</label>
                <div class="controls">
                <span id="time_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input type="text" required class="span11" name="to" placeholder="Phone number" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Message :</label>
                <div class="controls">
                <span id="location_error" class="alert alert-danger span11" style="display:none;" ></span>
              <textarea class="span11" name="message" placeholder="Enter Text here ..." ></textarea>
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="save"><i class="icon icon-envelope"></i> Send</button>
              </div>
            </form>
          </div>
        </div>
        </div>
            
        <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Recieved Message</h5>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>From</th>
                  <th>Text Message</th>
                  <th>Action</th>
               
                </tr>
              </thead>
               <tbody>
               <?php 
          $user_id=$_SESSION['ind'];               
                    $dtt='';
                $counter = 1;
                $result = $follw->getData("SELECT * FROM message where receiver = 7000 order by id DESC;");
        foreach($result as $res)
        {    if($dtt != substr($res['td'],0,10) ){           
            echo " <tr>
            <td>" . $counter . "</td>
            <td>" . substr($res['td'],0,10) . "</td>
            <td>" . $res['sender'] . "</td>
            <td>" . $res['text'] . "</td>
          <td >
          
          <div class=\"pull-right a\"> 
           <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this follw?')\" href='delete_message.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
           </td>
          </tr>";}else{
           echo" <tr>
            <td>" . $counter . "</td>
            <td></td>
            <td>" . $res['sender'] . "</td>
            <td>" . $res['text'] . "</td>
          <td >
          
          <div class=\"pull-right a\"> 
           <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this follw?')\" href='delete_message.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
           </td>
          </tr>";   
          }
          $dtt=substr($res['td'],0,10) ;
//                        <a class=\"tip-bottom\" href='edit_text.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                        $counter++;
        }    ?> </tbody>
                </table>
         </div>
          </div>
          </div>
          </div>


          </div>
        </div>
      </div>
     
<?php
include 'footer.html';

?>