
<?php 
require_once 'follow.php';
$customr = new Follow();
$id = isset($_GET['id']) ? $_GET['id'] : 0;


if (isset($_POST['save'])) {
   $user = $customr->escape_string($_POST['user']);
    $access = $customr->escape_string($_POST['access']);
  

               
         $result = $customr->execute("UPDATE `access_right` SET `user_id`='$user',`prevelage_id`='$access'
         WHERE `id`='$id'; ");
        
        if ($result) {
   
 header('Location: access_right.php');
exit;}}
?>