<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
<title>|| श्री ||</title>
</head>
<body>
    <div class="container">
        <div class="loginbox">
            <center>
                <img src="./images/logo-pink.png" alt="" srcset="" class="mylogo">
            </center>
            <br>
            <div class="row login-left">
                <div class="col-md-6">
                    <h2 class="text-white-50">LOG IN</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                    <label for=""class="text-white-50">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                    <label for="" class="text-white-50">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-success" name="btnsubmit" id="btnsubmit">Login</button>
                    </form>
                </div>
                <div class="col-md-6">
                <h2 class="text-white-50">REGISTER HERE</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                    <label for="" class="text-white-50">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                    <label for="" class="text-white-50">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-primary" name="btnsubmit" id="btnsubmit">Register</button>
                    </form>
                </div>    
            </div>    
        </div>
    </div>
</body>
</html>