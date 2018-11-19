<?php
 session_start();
 //echo $_SESSION['email'];
  unset($_SESSION['email']);
  session_unset();
  session_destroy();
  header('location:/');
  exit;
 
?>