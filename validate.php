<?php

session_start();

$valid_username = "Syed";
$valid_password = "1234";

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password) 
{
  $_SESSION['username'] = $username;
  $_SESSION['authenticated'] = 1;
  header("Location: /");
} else {

  if (!isset($_SESSION['Failed Attempts']))
  {
    $_SESSION['Failed Attempts'] = 1; 
  }
  else
  {
    $_SESSION['Failed Attempts'] = $_SESSION['Failed Attempts']+1;
  }
  echo "Login Failed. The Number of Unsuccessful Attempts are: ".$_SESSION['Failed Attempts'];

}

?>