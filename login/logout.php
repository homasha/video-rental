<?php
  session_start();
  // $_SESSION = array();
  unset($_SESSION['info']);
  if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600);
  }
  header('Location:../index.php');
?>
