<?php
session_start();
$servername="localhost";
$fusername ="root";
$password ="";
$dbname = "register_db";
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $fusername, $password, $dbname);
if (!$conn){
    die("connection failed". mysqli_connect_error());
}
?>

