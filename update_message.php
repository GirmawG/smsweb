
<?php 
require_once 'follow.php';
$msg = new Follow();
$id = isset($_GET['id']) ? $_GET['id'] : 0;
if (isset($_POST['save'])) {
        $text = $msg->escape_string($_POST['text']);

         $result = $msg->execute("UPDATE `msg` SET `text`='$text' WHERE `id`='$id'; ");
        
        if ($result) {
   
 header('Location: message.php');
exit;}}
?>