<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/input.css">
    <title></title>
</head>
<body>
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

$id = $_POST['id'];
$que = "SELECT * FROM tblcustompc WHERE id = '$id' ";
$que_run = mysqli_query($conn,$que);

if($que_run){
    while($rows = mysqli_fetch_array($que_run)){
      ?>
      <center>
      <h1>Update Your Components</h1>
      </center>
        <div class="login-box">
  <h2>Fill Your Component</h2>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
    <div class="user-box">
      <input type="text" name="mbord" required="" value="<?php echo $rows['mbord'] ?>">
      <label>Motherbord</label>
    </div>
    <div class="user-box">
      <input type="text" name="psor" required="" value="<?php echo $rows['psor'] ?>">
      <label>Processor</label>
    </div>
    <div class="user-box">
      <input type="text" name="ram" required="" value="<?php echo $rows['ram'] ?>">
      <label>Ram</label>
    </div>
    <div class="user-box">
      <input type="text" name="ssd" required="" value="<?php echo $rows['ssd'] ?>">
      <label>Ssd</label>
    </div>
    <div class="user-box">
      <input type="text" name="gpu" required="" value="<?php echo $rows['gpu'] ?>">
      <label>Graphics Card</label>
    </div>
    <div class="user-box">
      <input type="text" name="smps" required="" value="<?php echo $rows['smps'] ?>">
      <label>Power Supply</label>
    </div>
    <div class="user-box">
      <input type="text" name="cabi" required="" value="<?php echo $rows['cabi'] ?>">
      <label>Cabinet</label>
    </div>
    <button type="submit" class="btn mt-4" name="update" id="pushdone">
        <span></span>
      <span></span>
      <span></span>
      <span></span>Update</button>
      <a href="update.php"> Cancle </a>
    <!-- <a href="#" type="submit" class="btn mt-4" name="pushdone" id="pushdone">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a> -->
  </form>
  <?php
    if(isset($_POST['update']))
    {
        $mbname= $_POST['mbord'];
        $pros = $_POST['psor'];
        $memory = $_POST['ram'];
        $storage = $_POST['ssd'];
        $vram = $_POST['gpu'];
        $power = $_POST['smps'];
        $cover = $_POST['cabi'];    

        $que = "UPDATE tblcustompc SET mbord='$mbname',psor='$pros',ram='$memory',ssd='$storage',gpu='$vram',smps='$power',cabi='$cover' WHERE id='$id'";
        $que_run = mysqli_query($conn,$que);

        if($que_run)
        {
//            echo '<script>alert("Record Updated");</script>';
//            header("location:update.php");
			?>
                <script>
                    alert('Data Updated!');
					window.location.href='update.php';
                </script>
<?php
        }
        else
        {
            ?>
                <script>
                    alert('cannot update for Some Reason');
                </script>
<?php
        }
    }
  ?>
</div>
        <?php  
    }
}
else{
    echo '<script>alert("No Record Found");</script>';
}
?>


</body>
</html>
