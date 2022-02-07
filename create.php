<?php 
include 'db.php' ;
$username=$_POST['username'];
$password=$_POST ['password'];


$sql ="insert into login(username,password)
values ('$username', '$password')";


if($conn->query($sql) === TRUE){
    header("Location: loggedin.php");

}else
{
echo "ERROR:" .$sql . "<br>" . $conn->error;
}
$conn->close();




?>