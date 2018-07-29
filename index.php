<?php
  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  if(!isset($email) && !isset($password)) {
    header('location:/pages/HomePage/home.php');
  }
  else {
    header('location:/pages/IndexPage/index.php');
  }
?>