<?php
include('./header.php');
session_start();
?>
<link rel="stylesheet" href="./style/shop.css">
<body>
	<!-- <div class="container-fluid p-3 my-3 bg-dark text-white">
		<ul>
			<li><input type="checkbox" name="" id="laptop" onClick="clickMe()"> Laptop</li>
			<li><input type="checkbox" name="" id="mice" onClick="clickMe()"> Mouse</li>
			<li><input type="checkbox" name="" id="ky" onClick="clickMe()"> Keybord</li>
			<li><input type="checkbox" name="ass" id="ass" onClick="clickMe()"> Accessories</li>
		</ul>
	</div> -->
<!--LAPTOP-->

	<section id="msg" style="">
		<div class="container d-flex justify-content-center">
			<div class="row">
			<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/Laptop/msi titan.png"  style="width:100%">
			  <div class="container">
				<h2>TITAN GT77 12U</h2>
				<p class="title">Intel® Core™ i9-12900HX processor<br>NVIDIA® GeForce RTX™ 3080 Ti Laptop GPU </p>
				<p class="ff">₹ 2,00,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="TITAN GT77 12U">
				<input type="hidden" name="pprice" value="200000">
				<!-- <p>kakarot12567@gmail.com</p> -->
			  </div>
			</div>
		  </div>
		  </form>
		  <form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/Laptop/omen.png"  style="width:100%">
			  <div class="container ">
				<h2>Omen 15T-FA000</h2>
				<p class="title"> Intel® Core™ i7-12700H <br> NVIDIA® GeForce RTX™ 3050 Ti (4 GB)</p>
				<p class="ff">₹ 1,60,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="Omen 15T-FA000">
				<input type="hidden" name="pprice" value="160000">
			  </div>
			</div>
		  </div>	
		  </form>
		  <form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/Laptop/aspire.jpg" style="width:100%">
			  <div class="container">
				<h2>Acer Aspire 7</h2>
				<p class="title">Intel Core i5-1240P processor<br> NVIDIA GeForce GTX 1650 with 4 GB </p>
				<p class="ff">₹ 80,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="Acer Aspire 7">
				<input type="hidden" name="pprice" value="80000">
			  </div>
			</div>
		  </div>
		</div>
		<!--
					<img src="./images/Laptop/msi titan.png" class=" col-md-3 space">
					<img src="./images/Laptop/msi titan.png" class="col-md-3 space">
					<img src="./images/Laptop/msi titan.png" class="col-md-3 space">
		-->
				</div>
</form>
	</section>
<form action="manage_shop.php" method="POST">
	<section id="micemsg" style="">
		<div class="container d-flex justify-content-center">
			<div class="row">
		  <div class="column">
			<div class="card">
			  <img src="./images/mice/razer.png"  style="width:100%">
			  <div class="container">
				<h2>RAZER DEATHADDER ESSENTIAL</h2>
				<p class="title">Essential Gaming Mouse with 6,400 DPI Optical Sensor</p>
				<p class="ff">₹ 999</p>
				<button type="submit"  name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="RAZER DEATHADDER ESSENTIAL">
				<input type="hidden" name="pprice" value="999">
				<!-- <p>kakarot12567@gmail.com</p> -->
			  </div>
			</div>
		  </div>
</form>
<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/mice/cooler.png"  style="width:100%">
			  <div class="container">
				<h2>COOLER MASTER MM710's</h2>
				<p class="title">Less Pain,More Game</p>
				<p class="ff">₹ 3,500</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="COOLER MASTER MM710's">
				<input type="hidden" name="pprice" value="3500">
			  </div>
			</div>
		  </div>	
		  </form>
<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/mice/red.jpg" style="width:100%">
			  <div class="container">
				<h2>Redgear Z-Series Z1 Pro</h2>
				<p class="title">Avago 3050 gaming grade senso</p>
				<p class="ff">₹ 1,500</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="Redgear Z-Series Z1 Pro">
				<input type="hidden" name="pprice" value="1500">
			  </div>
			</div>
		  </div>
		</div>
		</div>
</form>
		</section>
		<section id="kymsg" style="">
		<div class="container d-flex justify-content-center">
			<div class="row">
				<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/ky/keychron.png"  style="width:100%">
			  <div class="container">
				<h2>Keychron K2 V2</h2>
				<p class="title">Wireless Mechanichal Keyboard With Red Switches</p>
				<p class="ff">₹ 16,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="Keychron K2 V2">
				<input type="hidden" name="pprice" value="16000">
				<!-- <p>kakarot12567@gmail.com</p> -->
			  </div>
			</div>
		  </div>
		  </form>
		  <form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/ky/cooler.png"  style="width:100%">
			  <div class="container">
				<h2>COOLER MASTER SK621</h2>
				<p class="title">Best miniTKL Gaming Keybord</p>
				<p class="ff">₹ 8,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="COOLER MASTER SK621">
				<input type="hidden" name="pprice" value="8000">
			  </div>
			</div>
		  </div>	
		  </form>
<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/ky/cosmic.jpg" style="width:100%">
			  <div class="container">
				<h2>Cosmic Byte Artemis 68</h2>
				<p class="title"> Key Per Key RGB Mechanical Gaming Keyboard
</p>
				<p class="ff">₹ 4,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="Cosmic Byte Artemis 68">
				<input type="hidden" name="pprice" value="4000">
			  </div>
			</div>
		  </div>
		</div>
		</div>
</form>
		</section>
		<section id="assmsg" style="	">
		<div class="container d-flex justify-content-center">
			<div class="row">
<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/ass/razer.png"  style="width:100%">
			  <div class="container">
				<h2>RAZER KRAKEN V3</h2>
				<p class="title">ICONIC SOUND. IMMERSIVE COMFORT.</p>
				<p class="ff">₹ 2,500</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="RAZER KRAKEN V3">
				<input type="hidden" name="pprice" value="2500">
				<!-- <p>kakarot12567@gmail.com</p> -->
			  </div>
			</div>
		  </div>
</form>
<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/ass/rad2.png"  style="width:100%">
			  <div class="container">
				<h2>RAZER MOUSEPAD</h2>
				<p class="title">Slim and flexible for portable precision</p>
				<p class="ff">₹ 1,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="RAZER MOUSEPAD">
				<input type="hidden" name="pprice" value="1000">
			  </div>
			</div>
		  </div>	
</form>
<form action="manage_shop.php" method="POST">
		  <div class="column">
			<div class="card">
			  <img src="./images/ass/rgb.png" style="width:100%">
			  <div class="container">
				<h2>Razer Chroma Light Strip Expansion Kit</h2>
				<p class="title">Universal Compatibility with Any ARGB Device</p>
				<p class="ff">₹ 10,000</p>
				<button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
				<input type="hidden" name="pname" value="Razer Chroma Light Strip Expansion Kit">
				<input type="hidden" name="pprice" value="10000">
			  </div>
			</div>
		  </div>
		</div>
		</div>
		</form>
		</section>
<!-- <script>
	function clickMe(){
		var lp = document.getElementById("laptop");
		var lp1 = document.getElementById("mice");
		var text = document.getElementById("msg");
		var text1 = document.getElementById("micemsg");
		var lp2 = document.getElementById("ky");
		var text2 = document.getElementById("kymsg");
		var lp3 = document.getElementById("ass");
		var text3 = document.getElementById("assmsg");
		if(lp.checked==true){
			text.style.display="block";
		}
		else{
			text.style.display="none";
		}
		if(lp1.checked==true){
			text1.style.display="block";
		}
		else{
			text1.style.display="none";
		}
		if(lp2.checked==true){
			text2.style.display="block";
		}
		else{
			text2.style.display="none";
		}
		if(lp3.checked==true){
			text3.style.display="block";
		}
		else{
			text3.style.display="none";
		}

	}
</script> -->

</body>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->

