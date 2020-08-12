<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'sms');  
$sql = "SELECT `id`,`full_name`,`phone` FROM `customer`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Customer Id" . "\t" . "full name" . "\t" . "phone" . "\t";  
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
header("Content-Disposition: attachment; filename=Customer_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  // header('Location:cutomer.php');
  ?> 