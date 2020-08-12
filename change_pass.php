<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="change_pass.php" class="current">Change Password</a> </div>
    </div>
    <div class="container-fluid">
      <hr>

 <div class="row-fluid">
        <div class="span6">
<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>about</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="change_password.php" method="POST" name="reset" class="form-horizontal" >
              
              
            <div class="control-group">
                    <label class="control-label">Current Password</label>
                    <div class="controls">
                      <input type="password"  class="span11" name="current_password" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">New Password</label>
                    <div class="controls">
                      <input type="password"  class="span11" name="new_password" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Confirm Password</label>
                    <div class="controls">
                      <input type="password"  class="span11" name="confirm_password" />
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" name="reset" class="btn btn-success">Change Password</button>
                  </div>
            </form>
            </div>
          </div> 
          </div>
         
        

          </div>
        </div>
      </div>
     

<?php
include_once 'html/footer.html';
?>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<!-- <script src="js/bootstrap.min.js"></script>  -->
<script src="js/jquery.uniform.js"></script> 

<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<!-- <script src="js/matrix.js"></script>  -->
<script src="js/matrix.tables.js"></script>