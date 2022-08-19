<?php 
// header('location:header.php');
include('./adminheader.php');
?>
<?php
    include_once("connection.php");
    $query = "select * from tblcustompc";
    $result = mysqli_query($conn,$query);
  ?>
  <?php
    include_once("connection.php");
    $query2 = "select * from tblcustomky";
    $result2 = mysqli_query($conn,$query2);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style/update.css">
</head>
<body>
    <br><br><br>
    <div class="container">
    <table class="tbl-pos" >
        <tr>
            <th class="myhead" style="text-align: center;">Your PC Details</th>
        </tr>
        <tr>
            <th style="padding: 20px; color: aqua;" >ID</th>
            <th style="padding: 20px; color: aqua;">MotherBord</th>
            <th style="padding: 20px; color: aqua;">Processor</th>
            <th style="padding: 20px; color: aqua;">Ram</th>
            <th style="padding: 30px; color: aqua;">Ssd</th>
            <th style="padding: 20px; color: aqua;">Gpu</th>
            <th style="padding: 20px; color: aqua;">Smps</th>
            <th style="padding: 20px; color: aqua;">Cabinet</th>
            <th style="padding: 20px; color: aqua;">Operations</th>
        </tr>
        <?php 
            while($rows=mysqli_fetch_assoc($result))        
            {
                ?>
                <tr>
                    <td style="padding: 10px; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-align: center;"><?php echo $rows['id']; ?></td>
                    <td style="color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-align: center;"><?php echo $rows['mbord']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';" ><?php echo $rows['psor']; ?></td>
                    <td style=" text-align: center;color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows['ram']; ?></td>
                    <td style=" text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows['ssd']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows['gpu']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows['smps']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows['cabi']; ?></td>
                    <form action="updatedata.php" method="post">
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';">
                    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                    <input type="submit" name="Edit" value="Edit" class="btn btn-primary">
                     </td></form>
                    <form action="deletedata.php" method="post">
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';">
                    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </td>
                    </form>
                </tr>
        <?php        
            }
        ?>
    </table>
    </div>
    <br><br><br><br><br>
    <!-- Keybord -->
    <div class="container">
    <table style="position: absolute;">
        <tr>
            <th class="myhead">Your Keybord Details</th>
        </tr>
        <tr>
            <th style="padding: 20px; color: aqua; justify-content: center;">ID</th>
            <th style="padding: 20px; color: aqua;">Size</th>
            <th style="padding: 30px; color: aqua;">Layout</th>
			<th style="padding: 30px; color: aqua;">Color</th>
            <th style="padding: 20px; color: aqua;">Switch</th>
            <th style="padding: 20px; color: aqua;">Keycap</th>
            <th style="padding: 20px; color: aqua;">Operations</th>
        </tr>
        <?php 
            while($rows2=mysqli_fetch_assoc($result2))        
            {
                ?>
                <tr>
					<td style="text-align: center; padding: 10px; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows2['id']; ?></td>
                    <td style="text-align: center; padding: 10px; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows2['size']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows2['layout']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows2['color']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows2['switch']; ?></td>
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><?php echo $rows2['keycap']; ?></td>
                    <form action="updatedataky.php" method="post">
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';">
                    <input type="hidden" name="id" value="<?php echo $rows2['id'] ?>">
                    <input type="submit" name="Edit" value="Edit" class="btn btn-primary">
                     </td></form>
                    <form action="deletedata.php" method="post">
                    <td style="text-align: center; color: cornsilk; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';">
                    <input type="hidden" name="id2" value="<?php echo $rows2['id'] ?>">
                    <input type="submit" name="delete2" value="Delete" class="btn btn-danger">
                </td>
                    </form>
                </tr>
        <?php        
            }
        ?>
    </table>
    </div>
</body>
</html>

