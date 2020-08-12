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
 <?php 
                    require_once 'follow.php';
                    $mes = new Follow();   
                    $msg= new Follow();                 
                    $id=$_GET['id'];
                    $id = isset($_GET['id']) ? $_GET['id'] : 0;
         
               $res = $mes->getData("SELECT * FROM msg WHERE id=$id");
                  $text=$res[0]['text'];
                    ?>

 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Update Text Message </h5>
          </div>
          <div class="widget-content nopadding">
            <form action="update_message.php?id=<?php echo $id;?>" method="POST" name="save" onsubmit="return validatefollow();" class="form-horizontal">
                 
              <div class="control-group">
                <label class="control-label">Text Message :</label>
                <div class="controls">
                <span id="location_error" class="alert alert-danger span11" style="display:none;" ></span>
              <textarea class="span11" name="text" placeholder="Enter Text here ..." ><?php echo $text; ?></textarea>
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="save"><i class="icon icon-save"></i> Save</button>
              </div>
            </form>
          </div>
        </div>
        </div>
            
        <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Previous Text Message</h5>
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
                $result = $msg->getData("SELECT * FROM msg order by id DESC;");
        foreach($result as $res)
        {                echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . substr($res['date_added'],0,10) . "</td>
                          <td>" . $res['text'] . "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> 
                        <a class=\"tip-bottom\" href='edit_message.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                        <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this msg?')\" href='delete_message.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
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