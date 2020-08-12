
<?php 
require_once 'follow.php';
$customr = new Follow();
$id = isset($_GET['id']) ? $_GET['id'] : 0;


if (isset($_POST['save'])) {
   $full_name = $customr->escape_string($_POST['full_name']);
    $phone = $customr->escape_string($_POST['phone']);
    $email = $customr->escape_string($_POST['email']);
    $gender = $customr->escape_string($_POST['gender']);
    $address = $customr->escape_string($_POST['address']);

               
         $result = $customr->execute("UPDATE `customer` SET `full_name`='$full_name',`phone`='$phone',
        `email`='$email',  `gender`='$gender',  `address`='$address' WHERE `id`='$id'; ");
        
        if ($result) {
   
 header('Location: customer.php');
exit;}}
?>