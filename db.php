<?php
$servername ="localhost";
$username ="hotelproject";
$password ="11223344";
$dbname ="hotelproject";
// creating  connection 
$conn = new mysqli($servername,$username,$password,$dbname);
// checking the conncetion 
if ($conn ->connect_error){
    die("connection failed;".$conn->connect_error);
}
?>