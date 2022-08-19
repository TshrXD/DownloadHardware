<?php
header('location:customky.php');

$servername="localhost";
    $usern="root";
    $password="";
    $dbname="downloadhardware";

    $conn= mysqli_connect($servername,$usern,$password,$dbname);


$siz= $_POST['size'];
$lay = $_POST['layout'];
$col = $_POST['color'];
$swi = $_POST['switch'];
$cap = $_POST['keycap'];


$qqu = "select * from login where username ='$pros'";
$result = mysqli_query($conn,$qqu);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "username already taken";
}
else
{
    $reg = "insert into tblcustomky(size,layout,color,switch,keycap) values ('$siz','$lay','$col','$swi','$cap')";
    mysqli_query($conn,$reg);
    echo "Registration Success";
}
?>