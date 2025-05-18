<?php 
ini_set("session.cookie_lifetime", "7200");
ini_set("session.gc_maxlifetime", "7200");

session_start();

$_SESSION["email"] = "";
$_SESSION["password"] = "";
?>
<script>document.location.href="./index.php";</script>