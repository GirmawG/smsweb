<?php 
require_once 'follow.php';
$msg = new Follow();
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$msg->delete($id, 'received_msg');
header('Location: dashboard.php');
exit;?>
