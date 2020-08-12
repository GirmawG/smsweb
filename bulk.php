<?php 

   for($i=0;$i<20;$i++){
$ch = curl_init();
$to="0991733325";
$message="ADIKA+Bulk";
                $url="http://127.0.0.1:13013/cgi-bin/sendsms?username=adika&password=adika123&to=$to&text=$message&smsc=adika&charset=utf-8&coding=2";
                // echo $url;
    
                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                
                // grab URL and pass it to the browser
                $res=curl_exec($ch); curl_close($ch);
 } ?>
