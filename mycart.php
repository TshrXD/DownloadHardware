<?php
include('./header.php');
session_start();
?>
<head>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>MY CART</h1>
				
			</div>
			<div class="col-lg-12 ">
			<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Sr. no.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price ₹</th>
      <th scope="col">Quntity</th>
	  <th scope="col">Total</th>
	  <th scope="col"></th>
    </tr>
  </thead>
				<?php
//					$total = 0;
					foreach($_SESSION['cart'] as $key => $value)
					{
						if(isset($_SESSION['cart']))
						{
//						print_r($value);\
//							$total=$total+$value['pprice'];
							$sr=$key+1;
							echo"
							<tr class='text-center'>
								<th>$sr</th>
      							<td>$value[pname]</td>
      							<td>$value[pprice]<input type='hidden' class='iprice' value='$value[pprice]'></td>
      							<td><input  class='text-center iquantity' onchange='subTotal()' type='number' value='$value[qunatity]' min='1' max='10'> </td>
								<td class='itotal'></td>
								<td>
								<form action='manage_shop.php' method='POST'>
								<button class='btn btn-sm btn-outline-danger' name='Remove_Item'>Remove</button>
								 <input type='hidden' value='$value[pname]' name='pname'> 
								</form>
								</td>
							</tr>";
						}
					}
				?>
  <tbody class="text-center">
  </tbody>
</table>
			</div>
			<div class="text-center">
				<h3 id="">Total : ₹</h3><h5 id="gtotal"></h5>
			</div>
			<div>
				<?php
					if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
					{
				?>
				<form class="text-center col-lg-3" action="purchase.php" method="post">
					<div class="form-group">
					<input type="text" class="form-control" name="fname" placeholder="Enter Your Full Name" required>
				  </div><br>
					<div class="form-group">
					<input type="number" class="form-control" name="num" placeholder="Enter Your Phone Number" required>
				  </div><br>
					<div class="form-group">
					<input type="text" class="form-control" name="address" placeholder="Enter Your Address" required>
				  </div><br>
				<input type="radio" name="pay_mode" value="COD" checked>
					<lable>Cash On Delivery</lable><br><br>
				<button class="btn btn-primary btn-block" name="purchase" >Make Purchase</button>
				</form>	
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<script>
		var gt=0;
		var iprice = document.getElementsByClassName('iprice');
		var iquantity = document.getElementsByClassName('iquantity');
		var itotal = document.getElementsByClassName('itotal');
		var gtotal = document.getElementById('gtotal');
		
		function subTotal()
		{
			gt=0;
			for(i=0;i<iprice.length;i++)
				{
					itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
					gt=gt+(iprice[i].value)*(iquantity[i].value);
				}
			gtotal.innerText=gt;
		}
		subTotal();
	</script>
</body>
