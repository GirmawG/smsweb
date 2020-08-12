<?php
include_once 'header.html';
?>
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="index.php" class="current">SMS</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      
      <?php
        require_once 'follow.php';
        $follw = new Follow();

        if (isset($_POST['save'])) {
            try {
                $to = $follw->escape_string($_POST['to']);
                $message = $follw->escape_string($_POST['message']);
                $message=str_replace(" ","+",$message);
		 $url="http://127.0.0.1:13013/cgi-bin/sendsms?username=adika&password=adika123&to=$to&text=$message&smsc=adika&charset=utf-8&coding=2";
                // echo $url;
                $ch = curl_init();

                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                
                // grab URL and pass it to the browser
                curl_exec($ch);
                
                // close cURL resource, and free up system resources
                curl_close($ch);

                $result = $follw->execute("INSERT INTO `message`( `receiver`, `text`)
                VALUES ('$to','$message')");
                               if ($result) {
           ?>

    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
              Message send successfully
              </div> 
            <?php 
            echo "<br/>Receiver :" . $to;
            echo "<br/>Text Message :" .str_replace("+"," ",$message);
           


         } else { 
            ?><div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              follw not saved successfully </div>
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
