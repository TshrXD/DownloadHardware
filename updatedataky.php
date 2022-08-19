<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/input-keybord.css">
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
$que = "SELECT * FROM tblcustomky WHERE id = '$id' ";
$que_run = mysqli_query($conn,$que);

if($que_run){
    while($rows = mysqli_fetch_array($que_run)){
      ?>
      <center>
      <h1>Update Your Keybord</h1>
      </center>
      <div class="login-box">
  <h2>Set Your Keybord</h2>
  <form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
    <div class="user-box">
      <input type="text" name="size" required="" value="<?php echo $rows['size'] ?>" >
      <label>Size</label>
    </div>
    <div class="user-box">
      <input type="text" name="layout" required="" value="<?php echo $rows['layout'] ?>">
      <label>layout</label>
    </div>
    <div class="user-box">
      <input type="text" name="color" required="" value="<?php echo $rows['color'] ?>">
      <label>Keybord Color</label>
    </div>
    <div class="user-box">
      <input type="text" name="switch" required="" value="<?php echo $rows['switch'] ?>">
      <label>Switches</label>
    </div>
    <div class="user-box">
      <input type="text" name="keycap" required="" value="<?php echo $rows['keycap'] ?>">
      <label>Keycap Color</label>
    </div>
    <button type="submit" class="btn mt-4" name="update" id="pushdone">
        <span></span>
      <span></span>
      <span></span>
      <span></span>Submit</button>
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
        $siz= $_POST['size'];
        $lay = $_POST['layout'];
        $col = $_POST['color'];
        $swi = $_POST['switch'];
      $cap = $_POST['keycap'];

        $que = "UPDATE tblcustomky SET size='$siz',layout='$lay',color='$col',switch='$swi',keycap='$cap' WHERE id='$id'";
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
                    alert('Cannot Update For Some Reason');
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
