<?php 
require_once 'follow.php';
$customr = new Follow();

session_start();
$user_id=$_SESSION['ind'];
$user_right=$_SESSION['access_right'];
// include 'header.html';
if(strcmp($user_right,"ADMIN") != 0 && strcmp($user_right,"APPROVE") != 0){

        echo "You are requested unauthorised resources.";
        exit(1);
}
else ;
$id = isset($_GET['id']) ? $_GET['id'] : 0;
// echo $user_id." ".$id;exit(1);               
         $result= $customr->execute("UPDATE `bulk_msg` SET `status`=1,`approved_by`='$user_id'
         WHERE `id`='$id'; ");
         $resultbulk = $customr->getData("SELECT * from `bulk_msg` WHERE `id`='$id';");
         $msgid=$resultbulk[0]['msg_id'];
         $bulkuser= (string) $resultbulk[0]['bulk_receiver'];
         $resultmsg = $customr->getData("SELECT * from `msg` WHERE `id`='$msgid'; ");
         $message = $resultmsg[0]['text'];
         $resultusr = $customr->getData("SELECT * from driver;");

         $message=str_replace(" ","+",$message);

// echo $bulkuser." ".$message;

// exit(1);
         
        foreach ($resultusr as $res) {
            $to=$res['phone'];
            $uid=(string)($res['id']);
            // echo $uid;           
           
            if(strpos($bulkuser,$uid) !== false){
           
//   echo $uid." ";
        $ch = curl_init();
                $url="http://127.0.0.1:13013/cgi-bin/sendsms?username=adika&password=adika123&to=$to&text=$message&smsc=adika&charset=utf-8&coding=2";
                // echo $url;
    
                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                
                // grab URL and pass it to the browser
                $rest=curl_exec($ch);

                 curl_close($ch);
      
           
            
           } // close cURL resource, and free up system resources
        }



        if ($result) {
   
 header('Location: approval_request.php');
exit;}
?>
