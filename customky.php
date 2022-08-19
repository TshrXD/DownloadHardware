<?php 

include('./header.php');
?>
<link rel="stylesheet" href="./style/input-keybord.css">
<body>
<div class="login-box">
  <h2>Set Your Keybord</h2>
  <form action="kydone.php" method="post">
    <div class="user-box">
      <input type="text" name="size" required="">
      <label>Size</label>
    </div>
    <div class="user-box">
      <input type="text" name="layout" required="">
      <label>layout</label>
    </div>
    <div class="user-box">
      <input type="text" name="color" required="">
      <label>Keybord Color</label>
    </div>
    <div class="user-box">
      <input type="text" name="switch" required="">
      <label>Switches</label>
    </div>
    <div class="user-box">
      <input type="text" name="keycap" required="">
      <label>Keycap Color</label>
    </div>
    <button type="submit" class="btn mt-4" name="pushdone" id="pushdone">
        <span></span>
      <span></span>
      <span></span>
      <span></span>Submit</button>
  </form>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
include('./footer.php');
?>