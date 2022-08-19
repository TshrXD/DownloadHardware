<?php 
include('./header.php');
?>
<link rel="stylesheet" href="./style/input.css">
<body>
<div class="login-box">
  <h2>Fill Your Component</h2>
  <form action="pcdone.php" method="post">
    <div class="user-box">
      <input type="text" name="mbord" required="">
      <label>Motherbord</label>
    </div>
    <div class="user-box">
      <input type="text" name="psor" required="">
      <label>Processor</label>
    </div>
    <div class="user-box">
      <input type="text" name="ram" required="">
      <label>Ram</label>
    </div>
    <div class="user-box">
      <input type="text" name="ssd" required="">
      <label>Ssd</label>
    </div>
    <div class="user-box">
      <input type="text" name="gpu" required="">
      <label>Graphics Card</label>
    </div>
    <div class="user-box">
      <input type="text" name="smps" required="">
      <label>Power Supply</label>
    </div>
    <div class="user-box">
      <input type="text" name="cabi" required="">
      <label>Cabinet</label>
    </div>
    <button type="submit" class="btn mt-4" name="pushdone" id="pushdone">
        <span></span>
      <span></span>
      <span></span>
      <span></span>Submit</button>
    <!-- <a href="#" type="submit" class="btn mt-4" name="pushdone" id="pushdone">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a> -->
  </form>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
include('./footer.php');
?>
