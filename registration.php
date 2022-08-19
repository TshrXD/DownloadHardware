<?php

header('location:login.php');

$servername="localhost";
    $usern="root";
    $password="";
    $dbname="downloadhardware";

    $conn= mysqli_connect($servername,$usern,$password,$dbname);


$name= $_POST['username'];
$pass = $_POST['password'];

$qqu = "select * from login where username ='$name'";
$result = mysqli_query($conn,$qqu);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "username already taken";
}
else
{
    $reg = "insert into login(username, password) values ('$name','$pass')";
    mysqli_query($conn,$reg);
    echo "Registration Success";
}
?>