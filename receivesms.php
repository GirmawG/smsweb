<?php
require_once 'follow.php';
$sms = new Follow();
$sender=$_GET['sender'];
$text=$_GET['text'];
$sql="INSERT INTO received_msg(number,message)VALUES('$sender','$text');";
$result = $sms->execute($sql);
  
  if ($result) {
  if (strcasecmp($text, "stop") == 0) { 
    $result = $sms->execute("UPDATE customer SET active=0 WHERE phone=$sender;");
  } 
 else if (strcasecmp($text, "start") == 0) { 
    $result = $sms->execute("UPDATE customer SET active=1 WHERE phone=$sender;");
  } 
else { 
   // echo 'Both strings are equal'; 

  } 
  echo "Well received and thank you.";

} else {
echo "try again,please";
  //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
