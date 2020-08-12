<?php

//including the database connection in admin and validation file
require_once '../follow.php';
require_once '../validation.php';
require_once '../CRYPT_KEY.php';
 //creating object instance of the class
$user = new Follow();
$validation = new Validation();

$error = "";
 
if (isset($_POST["login"])) {
  try {
    $email = $user->escape_string($_POST['email']);

    $password = $user->escape_string($_POST['password']);
    $email = $validation->test_input($email);
    $password = $validation->test_input($password);
    // $checkBox = isset($_POST['remember']);

    if ($validation->email_exists($email)) {

      $password = crypt($password, CRYPT_KEY);
      $result = $user->login($email, $password);
      
      if ($result==null) {

        echo "Password is incorrect";
          exit();
      } else {

        $user_validate= $user->getData("SELECT * from smsadminuser WHERE password='$password' AND email='$email'");
                $aid=$user_validate[0]['id'];
                $acresult = $user->getData("SELECT * from access_right WHERE id='$aid'");
                $prid=$acresult=$acresult[0]['prevelage_id'];
                $prvresult = $user->getData("SELECT * from prevelage WHERE id='$prid'");

        session_start();
        $_SESSION['full_name'] = $user_validate[0]['full_name'];
        $_SESSION['email'] = $user_validate[0]['email'];
        $_SESSION['ind'] = $user_validate[0]['id'];
        $_SESSION['access_right'] = $prvresult[0]['access_right'];
        // echo $_SESSION['access_right'];exit(1);

        // echo $_SESSION['ind']." ".$_SESSION['username'];

        // exit();
        header("location: ../index.php");

        // if ($checkBox == "on") {
        //   setcookie("username", $username, time() + 3600);
        // }
      //   else {
      //    session_destroy();
      //  }
      }
    } else {
      // header("location:#");
      echo "username or Password doesnot exists";
      exit();
    }
    echo $error;
  } catch (Exception $e) {
    $error = "Error: " . $e;

  }
}
?>