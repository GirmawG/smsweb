<?php 
require_once 'follow.php';
$msg = new Follow();
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$msg->delete($id, 'otp');
header('Location: otp.php');
exit;?>