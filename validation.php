<?php
require_once 'follow.php';

class Validation
{
    public function check_empty($data, $fields)
    {
        $msg = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $msg .= "$value field empty <br />";
            }
        }
        return $msg;
    }
    public function passmatch($password, $confirmpassword)
    {
        if ($password !== $confirmpassword) {
            return false;
        } else return true;
    }
    public function is_age_valid($age)
    {
        //if (is_numeric($age)) {
        if (preg_match("/^[0-9]+$/", $age)) {
            return true;
        }
        return false;
    }
    

    public function email_exists($email)
    {
        $user = new Follow();
        $result = $user->checkemail($email);

        if ($result) {
            return true;
        } else return false;
    }

    public function username_exists($email)
    {
        $user = new Follow();
        $result = $user->checkusername($email);

        if ($result) {
            return true;
        } else return false;
    }

    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function logged_in()
    {
       // session_start();
        if (isset($_SESSION['email'])|| isset($_COOKIE['email'])) {
            return true;
        } else {
            return false;
        }
    }
    public function is_email_valid($email)
    {
        //if (preg_match("/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

}
?>
