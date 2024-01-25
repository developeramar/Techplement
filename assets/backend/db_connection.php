<?php
// database Connection
$hostname = "127.0.0.1:2627";
$username = "root";
$password = "";
$db =  "todophp";
$conn = new mysqli($hostname,$username,$password,$db);
if($conn->connect_error){
die("connection error".$conn->connect_error);
}
session_start();
error_reporting('1');
?>
