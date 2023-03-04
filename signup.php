<?php
    require 'config.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    <body>
    <div class="bg" >
            <?php
                require 'header.php';
            ?>
            <br><br><br>
           <div class="container py-5">
                <div class="row my-5 d-flex ">
                
                    <div class="col-lg-4 col-md-6">

                        <div class="panel-body">
                            <div class="card-body">

                                <form method="post" action="login_submit.php">
                                    <h3 class="text-light">SignUp</h3>
                                    <p><small class="text-light">Daftarkan diri anda</small></p>
                                    <hr>
                                    <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required="true">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
    </div> 
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
    </div>
    <div class="form-group"> 
        <input type="tel" class="form-control" name="nohp" placeholder="No Hp" required="true">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="true">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Sign Up">
    </div>
                                </form>
                            </div>
                            
                            <div class="panel-footer">Don't have an account yet? <a href="login.php">Login in here</a></div>
                        </div>
                    </div>
                    <div class="col-lg-5 my-auto d-none d-lg-block jpg">  
                <img  src="./img/logologin.png" alt="">
                </div>
                </div>
        </div>
        </div>
    </body>
</html>
