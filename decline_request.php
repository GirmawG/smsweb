<?php 
require_once 'follow.php';
$customr = new Follow();

session_start();
$user_id=$_SESSION['ind'];
// include 'header.html';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
// echo $user_id;exit(1);               
         $result = $customr->execute("UPDATE `bulk_msg` SET `status`=-1,`approved_by`='$user_id'
         WHERE `id`='$id'; ");
        
        if ($result) {
   
 header('Location: approval_request.php');
exit;}
?>