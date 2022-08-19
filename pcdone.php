<?php
header('location:custompc.php');

    $servername="localhost";
    $usern="root";
    $password="";
    $dbname="downloadhardware";

    $conn= mysqli_connect($servername,$usern,$password,$dbname);


$mbname= $_POST['mbord'];
$pros = $_POST['psor'];
$memory = $_POST['ram'];
$storage = $_POST['ssd'];
$vram = $_POST['gpu'];
$power = $_POST['smps'];
$cover = $_POST['cabi'];

$qqu = "select * from login where username ='$pros'";
$result = mysqli_query($conn,$qqu);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "username already taken";
}
else
{
    $reg = "insert into tblcustompc(mbord,psor,ram,ssd,gpu,smps,cabi) values ('$mbname','$pros','$memory','$storage','$vram','$power','$cover')";
    mysqli_query($conn,$reg);
    ?>
                <script>
                    alert('Item Added');
					window.location.href='custompc.php';
                </script>
<?php
}
?>