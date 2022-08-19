<?php
session_start();
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


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['purchase']))
	{
		$query = "INSERT INTO order_manager(fname,num,address,pay_mode) VALUES ('$_POST[fname]','$_POST[num]','$_POST[address]','$_POST[pay_mode]')";
		if(mysqli_query($conn,$query))
		{
//			echo "done";
			$order_id=mysqli_insert_id($conn);
			$query2="INSERT INTO user_order(order_id,pname,pprice,qunatity) VALUES(?,?,?,?)";
			$stmt=mysqli_prepare($conn,$query2);
			if($stmt)
			{
				mysqli_stmt_bind_param($stmt,"isii",$order_id,$pname,$pprice,$qunatity);
				foreach($_SESSION['cart'] as $key=>$values)
				{
					$pname=$values['pname'];
					$pprice=$values['pprice'];
					$qunatity=$values['qunatity'];
					mysqli_stmt_execute($stmt);
				}
				unset($_SESSION['cart']);
				?>
                <script>
                    alert('Order Placed');
					window.location.href='index.php';
                </script>
<?php
			}
			else
			{
				?>
                <script>
                    alert('Query Error');
					window.location.href='mycart.php';
                </script>
<?php
			}
		}
		else
		{
			?>
                <script>
                    alert('Cannot Make Purchase');
					window.location.href='mycart.php';
                </script>
<?php
		}
			
	}
}
?>