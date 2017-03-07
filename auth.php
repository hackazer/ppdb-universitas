<?php
session_start();
if(!isset($_SESSION["kodepeserta"])){
header("Location: login.php");
exit(); }
?>