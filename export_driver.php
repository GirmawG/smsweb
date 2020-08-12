<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'sms');  
$sql = "SELECT `id`,`full_name`,`phone` FROM `driver`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Driver Id" . "\t" . "full name" . "\t" . "phone" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Driver_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  

//   header('Location:driver.php');
?> 