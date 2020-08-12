<?php 
require_once 'follow.php';
$csm = new Follow();
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$csm->delete($id, 'customer');
header('Location: customer.php');
exit;?>