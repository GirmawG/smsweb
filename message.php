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
            <form action="save_message.php" method="POST" name="save" onsubmit="return validatefollow();" class="form-horizontal">
                  <?php 
                    require_once 'follow.php';
                    $follw = new Follow();   
                    $customer= new Follow();                 
                    $resultdr = $customer->getData("SELECT * FROM msg;");
                  
                    ?>

              <div class="control-group">
                <label class="control-label">Text Message :</label>
                <div class="controls">
                <span id="location_error" class="alert alert-danger span11" style="display:none;" ></span>
              <textarea required class="span11" name="message" placeholder="Enter Text here ..." ></textarea>
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

          $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10; // per page
          $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
          $links = 9;

          $paginator = new Paginator("SELECT * FROM msg order by id DESC "); //__constructor is called
          $results = $paginator->getData($page );




              $counter = 1;
              // $result = $csm->getData("SELECT * FROM driver order by id DESC;");
              for ($p = 0; $p < count($results->data); $p++): 
                {	$res = $results->data[$p]; 
                             echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . substr($res['date_added'],0,10) . "</td>
                          <td>";
                          $msg=$res['text'];
                          if(strlen($msg) > 50){
                            echo substr($msg,0,50)."...";
                          }else { echo $msg;}
                           echo "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> 
                        <a class=\"tip-bottom\" href='edit_message.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                        <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this follw?')\" href='delete_message.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                         </td>
                        </tr>";
                        $counter++;
        }    ?> <?php 
        endfor ;
    {
      ?>
      <tr align="center" class="page-footer font-small blue pt-4">
      <td colspan="7" class="col-md-12 animate-box">
      <?php echo $paginator->createLinks('pagination pagination-sm' );?>
    </td>
    </tr>																																																																																										
    <?php		  
    }
    ?>	 </tbody>
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