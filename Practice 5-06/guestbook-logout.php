<?php
   # destroy session
   session_start();


   $_SESSION = array();

   session_destroy();

   header('location: guestbook-login.php');
   exit;
   
?>