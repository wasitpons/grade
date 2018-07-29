<?php
  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmpassword'];

  
  if($password == $confirmPassword) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location:/index.php');
  }
  else {
    $_SESSION['registed_email'] = $email;
    header('location:/pages/RegisterPage/register.php');
  }

?>