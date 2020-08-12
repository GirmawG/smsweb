<?php 
include 'header.html';
?><script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      ><a href="message.php" class="current">Text Message</a> </div>
    </div>
    <div class="container-fluid">
      <hr>

 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>New Text Message </h5>
          </div>
          <div class="widget-content nopadding">
            <form action="send_broadcast.php" method="POST" name="save" onsubmit="return validatefollow();" class="form-horizontal">
                  <?php 
                    require_once 'follow.php';
                    $brd = new Follow();   
                    $customer= new Follow();                 
                    $resultdr = $customer->getData("SELECT * FROM msg order by id DESC;");
                  
                    ?>

              <div class="control-group">
                <label class="control-label">Text Message :</label>
                <div class="controls">
                    <select name="message" class="form-control">
                        <?php foreach($resultdr as $res){
                            echo "<option value='".$res['id']."'>".$res['text']."</option>";
                        }?>
                    </select>

                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="save"><i class="icon icon-twitter"></i> Broadcast</button>
              </div>
            </form>
          </div>
        </div>
        </div>
            
        <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Broadcasted MSG</h5>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Text Message</th>
                  <th>Action</th>
               
                </tr>
              </thead>
               <tbody>
               <?php 
          $user_id=$_SESSION['ind'];               

                $counter = 1;
                $result = $brd->getData("SELECT * FROM broadcast order by id DESC;");
        foreach($result as $res)
        {
          $id=$res['msg_id'];
          $brdmsg = $brd->getData("SELECT * FROM msg where id= $id");
                  echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . substr($res['date'],0,10) . "</td>
                          <td>" . $brdmsg[0]['text'] . "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> 
                        <a class=\"tip-bottom\" href='edit_message.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                        <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this message?')\" href='delete_message.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                         </td>
                        </tr>";
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