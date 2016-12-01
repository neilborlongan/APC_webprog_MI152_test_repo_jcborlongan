<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "borlonganfive";
$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link, $datbase);
?>