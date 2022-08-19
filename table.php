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
<html >
<head>
  <meta charset="UTF-8">
  <title></title>

      <link rel="stylesheet" href="./style/details.css">
</head>
<body>
  <div class="container">
	<table>
		<thead>
			<tr>
			<th>id</th>
            <th>Motherbord</th>
            <th>Processor</th>
            <th>ram</th>
            <th>ssd</th>
            <th>gpu</th>
            <th>smps</th>
            <th>cabinet</th>
			</tr>
		</thead>
		<tbody>
		<?php 
            while($rows=mysqli_fetch_assoc($result))        
            {
                ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['mbord']; ?></td>
                    <td><?php echo $rows['psor']; ?></td>
                    <td><?php echo $rows['ram']; ?></td>
                    <td><?php echo $rows['ssd']; ?></td>
                    <td><?php echo $rows['gpu']; ?></td>
                    <td><?php echo $rows['smps']; ?></td>
                    <td><?php echo $rows['cabi']; ?></td>
                </tr>
        <?php        
            }
        ?>
		</tbody>
	</table>
	<table>
		<thead>
		<th>id</th>
            <th>Motherbord</th>
            <th>Processor</th>
            <th>ram</th>
            <th>ssd</th>
			</tr>
		</thead>
		<tbody>
		<?php 
            while($rows2=mysqli_fetch_assoc($result2))        
            {
                ?>
                <tr>
                    <td><?php echo $rows2['size']; ?></td>
                    <td><?php echo $rows2['layout']; ?></td>
                    <td><?php echo $rows2['color']; ?></td>
                    <td><?php echo $rows2['switch']; ?></td>
                    <td><?php echo $rows2['keycap']; ?></td>
                </tr>
        <?php        
            }
        ?>
		</tbody>
	</table>
</div>

</body>
</html>
