<?php 
 ini_set("session.cookie_lifetime", "7200");
 ini_set("session.gc_maxlifetime", "7200");
 
 session_start();
 
 $usercont=substr_count($_POST['email'], "'");
 $passcont=substr_count($_POST['password'], "'");
 
 if ($usercont==0 && $passcont==0) {
     $_SESSION['email']= $_POST['email'];
     $_SESSION['password']= $_POST['password'];
 }
 header("Location: index.php");
 exit();

 ?>