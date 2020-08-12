<?php 
include 'header.html';
?>
<script src="js/form_validation.js"></script>  
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
      <a href="customer.php" class="current">customer</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      <?php 
                    require_once 'follow.php';
                    $csm = new Follow();   
                    $customer= new Follow();                 
                    $id = isset($_GET['id']) ? $_GET['id'] : 0;
         
         $res = $csm->getData("SELECT * FROM customer WHERE id=$id");
            $full_name=$res[0]['full_name'];
            $phone=$res[0]['phone'];
            $email=$res[0]['email'];
            $gender=$res[0]['gender'];
            $address=$res[0]['address'];

            ?>
                
 <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Update Customer</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="update_customer.php?id=<?php echo $id;?>" method="POST" name="update" class="form"  class="form-horizontal">
              <div class="control-group">
                <label class="control-label">customer :</label>
                <div class="controls">
                <span id="customer_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input type="text" class="span11" name="full_name" value="<?php echo $full_name;?>" />
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                <span id="city_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input type="text" class="span11" name="phone" value="<?php echo $phone;?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                <span id="city_error" class="alert alert-danger span11" style="display:none;" ></span>
                <input type="text" class="span11" name="email" value="<?php echo $email;?>" />
                </div>
              </div>
              
              
              <div class="control-group">
                <label class="control-label">Gender :</label>
                <div class="controls">
                <select name="gender">
                <option value="male"<?php 
                  if($gender == "male"){
                    echo "selected";
                  }?> >Male</option>
                <option value="female" <?php 
                  if($gender == "female"){
                    echo "selected";
                  }?>>Female</option>
                </select>
              </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                <span id="woreda_error" class="alert alert-danger span11" style="display:none;" ></span>
              <input type="text" class="span11" name="address" value="<?php echo $address;?>" />
                </div>
              </div>
              
              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="save">Save</button>
              </div>
            </form>
          </div>
        </div>
        </div>
            
        <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Previous customer</h5>
        </div>
        <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                  <th>Email </th>
                  <th>Gender</th>
                  <th>Address id</th>
                  <th>Action</th>
               
                </tr>
              </thead>
               <tbody>
               <?php 
              $user_id=$_SESSION['ind'];               

                $counter = 1;
                $result = $csm->getData("SELECT * FROM customer;");
                foreach ($result as $res) {

                    echo " <tr>
                          <td>" . $counter . "</td>
                          <td>" . $res['full_name'] . "</td>
                          <td>" . $res['phone'] . "</td>
                          <td>" . $res['email'] . "</td>
                          <td>" . $res['gender'] . "</td>
                          <td>" . $res['address'] . "</td>
                        <td >
                        
                        <div class=\"pull-right a\"> <a class=\"tip-bottom\" href='edit_customer.php?id=" . $res['id'] . "' title=\"Edit\"><i class=\"icon-pencil btn btn-primary\"></i></a>
                         <a class=\"tip-bottom\"  onClick=\"return confirm('Are you sure to delete this csm?')\" href='delete_customer.php?id=" . $res['id'] . "' title=\"Delete\"><i class=\"icon-remove-sign btn btn-danger\"></i></a> </div>
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