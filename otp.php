<?php 
include 'header.html';
?><script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      ><a href="otp.php" class="current">OTP</a> </div>
    </div>
    <div class="container-fluid">
      <hr>

 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>New OTP </h5>
          </div>
          <div class="widget-content nopadding">
            <form action="send_otp.php" method="POST" name="save" onsubmit="return validatefollow();" class="form-horizontal">
                  <?php 
                    require_once 'follow.php';
                    $ot = new Follow();   
                    $customer= new Follow();                 
                    $resultdr = $customer->getData("SELECT * FROM otp;");
                  
                    ?>

              
              <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                <span id="time_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input type="text" required class="span11" name="phone" placeholder="Phone number" />
                </div>
              </div>
              <!-- <div class="control-group">
                <label class="control-label">Code :</label>
                <div class="controls">
                <span id="location_error" class="alert alert-danger span11" style="display:none;" ></span>
              <input type="number"  class="span11" name="code" placeholder="Enter code here ..." />
                </div>
              </div> -->

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
          <h5>OTP</h5>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Phone</th>
                  <th>Code</th>
                  <th>Type</th>
                  <th>Action</th>
               
                </tr>
              </thead>
               <tbody>
               <?php 
          $user_id=$_SESSION['ind'];               
            $dtt='';
                $counter = 1;
                $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10; // per page
                $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
                $links = 9;
      
                $paginator = new Paginator("SELECT * FROM otp order by id DESC "); //__constructor is called
                $results = $paginator->getData($page );
      
    
    
    
                    $counter = 1;
                    // $result = $csm->getData("SELECT * FROM driver order by id DESC;");
                    for ($p = 0; $p < count($results->data); $p++): 
                      {	$res = $results->data[$p]; 
                         if($dtt != substr($res['submited_date'],0,10) ){           
              echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . substr($res['submited_date'],0,10) . "</td>
                          <td>" . $res['phone'] . "</td>
                          <td>" . $res['code'] . "</td>
                          <td>" . $res['type'] . "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> 
                         <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this ot?')\" href='delete_otp.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                         </td>
                        </tr>";}else{
                         echo" <tr>
                          <td>" . $counter . "</td>
                          <td></td>
                          <td>" . $res['phone'] . "</td>
                          <td>" . $res['code'] . "</td>
                          <td>" . $res['type'] . "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> 
                         <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this ot?')\" href='delete_otp.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                         </td>
                        </tr>";   
                        }
                        $dtt=substr($res['submited_date'],0,10) ;
//                        <a class=\"tip-bottom\" href='edit_text.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
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