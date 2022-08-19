<?php
session_start();

    $servername="localhost";
    $usern="root";
    $password="";
    $dbname="downloadhardware";

    $conn= mysqli_connect($servername,$usern,$password,$dbname);


$name= $_POST['username'];
$pass = $_POST['password'];

$qqu = "select * from login where username ='$name' && password = '$pass'" ;
$result = mysqli_query($conn,$qqu);
$num = mysqli_num_rows($result);

if($num == 1)
{
   header('location:adminhome.php');
}
else
{
    header('location:login.php');   
}
?>