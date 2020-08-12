<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="broadcast.php" class="current">Broadcast</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      
      <?php
        require_once 'follow.php';
        $brd = new Follow();
        
        $user_right=$_SESSION['access_right'];
        if(strcmp($user_right,"ADMIN") != 0 && strcmp($user_right,"APPROVE") != 0){

          echo "You are requested unauthorised resources.";
          exit(1);
  }
  else ;
        
        if (isset($_POST['save'])) {
            try {

                $message_id = $brd->escape_string($_POST['message']);
                $msg = $brd->getData("SELECT * FROM msg where id=$message_id;");
                $message=$msg[0]['text'];
                $result = $brd->getData("SELECT * FROM customer where active=1;");
               $ch = curl_init();
            foreach ($result as $res) {
                $to=$res['phone'];
                $url="http://127.0.0.1:13013/cgi-bin/sendsms?username=adika&password=adika123&to=$to&text=$message&smsc=adika&charset=utf-8&coding=2";
                // echo $url;

                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                
                // grab URL and pass it to the browser
                curl_exec($ch);
                
               } // close cURL resource, and free up system resources
                curl_close($ch);

                $result = $brd->execute("INSERT INTO `broadcast`( `msg_id`)
                VALUES ('$message_id')");
                               if ($result) {
           ?>

    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
              Message heve been broadcasted successfully!
              </div> 
            <?php 
           
           


         } else { 
            ?><div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              brd not saved successfully </div>
 <?php

}
} catch (Exception $e) {
    echo "Error" . $e;
    echo "<br/><a href='javascript:self.history.back();' class='form-control'>Go Back</a>";

}
}

?>
 </div>
        </div>
      </div>   

<?php
include_once 'footer.html';
?>