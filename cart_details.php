<?php 
include('./adminheader.php');
include('./connection.php')
?>
<link rel="stylesheet" href="./style/details.css">
<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table text-center table-dark mt-5">
					  <thead>
						<tr class="">
						  <th scope="col">Order_ID</th>
						  <th scope="col">Customer Name</th>
						  <th scope="col">Phone No.</th>
						  <th scope="col">Address</th>
							<th scope="col">Pay Mode</th>
							<th scope="col">Orders</th>
						</tr>
					  </thead>
				<tbody>
					<?php
						$query="SELECT * FROM order_manager";
						$result=mysqli_query($conn,$query);
						while($users=mysqli_fetch_assoc($result))
						{
							echo "
						<tr class=''>
						  <td>$users[order_id]</td>
						  <td>$users[fname]</td>
						  <td>$users[num]</td>
						  <td>$users[address]</td>
						  <td>$users[pay_mode]</td>
						  <td>
							<table class='table table-dark'>
							  <thead>
								<tr class=''>
								  <th>Item Name</th>
								  <th>Price</th>
								  <th>Quantity</th>
								</tr>
							  </thead>
							<tbody>";
							$order_query="SELECT * FROM user_order WHERE order_id='$users[order_id]'";
							$order_result=mysqli_query($conn,$order_query);
							while($order_fetch=mysqli_fetch_assoc($order_result))
							{
								echo"
									<tr>
										<td>$order_fetch[pname]</td>
										<td>$order_fetch[pprice]</td>
										<td>$order_fetch[qunatity]</td>
									</tr>
								";
							}
						echo"  
							</tbody>
							<table>
						  </td>
						</tr>";
						}
					?>
					  
			</tbody>
				</table>
			</div>
		</div>
	</div>