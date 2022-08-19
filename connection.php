<?php
    $servername="localhost";
    $usern="root";
    $password="";
    $dbname="downloadhardware";

    $conn= mysqli_connect($servername,$usern,$password,$dbname);

    if($conn)
    {
        // echo "Connected";
    }
    else
    {
        echo "failed to connect".mysqli_connect_error();
    }
?>