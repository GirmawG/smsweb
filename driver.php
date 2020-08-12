<?php 
include 'header.html';
?>
<script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="driver.php" class="current">driver</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      <?php 
                    require_once 'follow.php';
                    $csm = new Follow();   
                    $driver= new Follow();                 
                    $resultdr = $driver->getData("SELECT * FROM driver where active = 1;");
                            ?>
                
 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Register New driver</h5> 
          </div>
          <div class="widget-content nopadding">
            <form action="save_driver.php" method="POST" name="save" class="form" onsubmit="return validateAddress();" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Full Name :</label>
                <div class="controls">
                <span id="driver_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input required type="text" class="span11" name="full_name" placeholder="Full Name" />
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                <span id="phone_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input  required type="text" class="span11" name="phone" placeholder="Phone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                <span id="email_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input required type="text" class="span11" name="email" placeholder="Email" />
                </div>
              </div>            
              
              <div class="control-group">
                <label class="control-label">Gender :</label>
                <div class="controls">
                <select required name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
              </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                <span id="woreda_error" class="alert alert-danger span11" style="display:none;" ></span>
              <input required type="text" class="span11" name="address" placeholder="address" />
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
          <h5>Registered driver</h5>
          <a  href="import_driver.php" title="Import Excel file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="btn icon-upload align-center"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="export_driver.php"  title="Export Excel file"><i class="btn icon-download align-left"></i></a>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                  <th>Email </th>
                  <th>Action</th>
               
                </tr>
              </thead>
               <tbody>
               <?php 
          $driver_id=$_SESSION['ind'];               

          $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10; // per page
						$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
						$links = 9;
	
						$paginator = new Paginator("SELECT * FROM driver order by id DESC "); //__constructor is called
						$results = $paginator->getData($page );
	



                $counter = 1;
                // $result = $csm->getData("SELECT * FROM driver order by id DESC;");
                for ($p = 0; $p < count($results->data); $p++): 
                  {	$res = $results->data[$p]; 
                    echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . $res['full_name'] . "</td>
                          <td>" . $res['phone'] . "</td>
                          <td>" . $res['email'] . "</td>
                            <td >
                        
                        <div class=\"pull-right a\"> <a class=\"tip-bottom\" href='edit_driver.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                         <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this csm?')\" href='delete_driver.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
                         </td>
                        </tr>";
                    $counter++;
                }
                ?> <?php 
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
            ?>	
                 </tbody>
                 
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