<?php
session_start();
if(!($_SESSION['views']))
$_SESSION['views']=1;
else
$_SESSION['views']++;
echo"<h1>No of views=$_SESSION[views]>/h1>";
?>
