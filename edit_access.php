<?php 
include 'header.html';
?>
<script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="access_right.php" class="current">Access Right</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      <?php 

                    require_once 'follow.php';
                    $id=$_GET['id'];
                 //   echo $id;
                    $csm = new Follow();   
                    $access= new Follow();                 
                    $reaccess = $access->getData("SELECT * FROM access_right where id=$id ;");
                    $resultdr = $access->getData("SELECT * FROM access_right ;");
                    $resultuser = $access->getData("SELECT * FROM smsadminuser ;");
                    $resultsms = $access->getData("SELECT * FROM prevelage ;");
                            ?>
                
 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Register New access</h5> 
          </div>
          <div class="widget-content nopadding">
            <form action="update_access.php?id=<?php echo $id;?>" method="POST" name="save" class="form" onsubmit="return validateAddress();" class="form-horizontal">
              

            <div class="control-group">
                <label class="control-label">User :</label>
                <div class="controls">
                    <select name="user" class="form-control">
                        <?php foreach($resultuser as $res){                    
                if($reaccess[0]['user_id']  == $res['id']  )    echo "<option selected value='".$res['id']."'>".$res['full_name']."</option>";
                            else                 echo "<option value='".$res['id']."'>".$res['full_name']."</option>";
                        }?>
                    </select>                                                                                                                                                                                       

                </div>
              </div>


              
            <div class="control-group">
                <label class="control-label">SMS Access :</label>
                <div class="controls">                                                                                                                              
                    <select name="access" class="form-control">                                                                                                                                                                                                                                    
                        <?php foreach($resultsms as $res){
                            if($reaccess[0]['prevelage_id']  == $res['id'])  echo "<option selected  value='".$res['id']."'>".$res['access_right']."</option>";
                            else echo "<option   value='".$res['id']."'>".$res['access_right']."</option>";
                        }?>

                    </select>

                </div>
              </div>

              
              

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="save"><i class="icon icon-save"></i>Save</button>
              </div>
            </form>
          </div>
        </div>
        </div>
            
        <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Registered access</h5>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>Access Right</th>
                  <th>Action</th>
               
                </tr>
              </thead>
               <tbody>
               <?php 
          $user_id=$_SESSION['ind'];               

                $counter = 1;
                $result = $csm->getData("SELECT * FROM access_right;");
                foreach ($result as $res) {
                   $ur=$res['user_id'];
                    $ac=$res['prevelage_id'];
                    $usr = $csm->getData("SELECT * FROM smsadminuser where id =$ur;");
                    $accr = $csm->getData("SELECT * FROM prevelage where id = $ac;");

                    echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . $usr[0] ['full_name']. "</td>
                          <td>" . $accr [0]['access_right']. "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> <a class=\"tip-bottom\" href='edit_access.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                         <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this csm?')\" href='delete_access.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                         </td>
                        </tr>";
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
include 'footer.html';

?>