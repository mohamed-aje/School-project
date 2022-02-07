<?php 
include 'db.php' ;
$name=$_POST['name'];
$email=$_POST ['email'];
$phone=$_POST ['phone'];
$arrive=$_POST ['arrive'];
$depart=$_POST ['depart'];
$people=$_POST ['people'];
$comment=$_POST ['comment'];



$sql ="insert into booknow(name,email,phone,arrive,depart,people,comment)
values ('$name', '$email','$phone','$arrive', '$depart','$people','$comment')";


if($conn->query($sql) === TRUE){
    header("Location: thankyou.php");
}else
{
echo "ERROR:" .$sql . "<br>" . $conn->error;
}
$conn->close();




?>