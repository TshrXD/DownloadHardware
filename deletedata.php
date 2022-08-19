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


if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $que = "DELETE FROM tblcustompc WHERE id='$id' ";
    $que_run = mysqli_query($conn,$que);

    if($que_run){
//        echo '<script>alert("Data Deleted");</script>';
//        header("location:update.php");
		?>
                <script>
                    alert('Data Deleted Successful');
					window.location.href='update.php';
                </script>
<?php
    }
    else
    {
        ?>
                <script>
                    alert('Cannot Delete For Some Reason');
                </script>
<?php
    }
}
if(isset($_POST['delete2'])){
    $id = $_POST['id2'];
    $que2 = "DELETE FROM tblcustomky WHERE id='$id' ";
    $que_run2 = mysqli_query($conn,$que2);

    if($que_run2){
//        echo '<script>alert("Data Deleted");</script>';
//        header("location:update.php");
		?>
                <script>
                    alert('Data Deleted Successful');
					window.location.href='update.php';
                </script>
<?php
    }
    else
    {
        ?>
                <script>
                    alert('Cannot Delete For Some Reason');
                </script>
<?php
    }
}


// $id = $_GET['idp'] 
// $deletaion = "delete from tblcustompc where mbrod = '$id' ";

// $data = mysqli_query($conn,$deletaion);

// if($data){
//     echo "Deleted";
// }
// else{
//     echo "failed";
// }
?>