<?php

$valid_username = "Syed";
$valid_password = "1234";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password) 
{
  echo "Login Successful $username";
}
else {
  echo "Login Failed!";
}
    
?>