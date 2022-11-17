<?php
$hostName	= "localhost";
$userName	= "root";
$passWord	= "";
$database	= "survey_db";

$masuk = mysqli_connect($hostName,$userName,$passWord) or die('Connection Failed');
$hore = mysqli_select_db($masuk,$database) or die('Database Failed');
?>