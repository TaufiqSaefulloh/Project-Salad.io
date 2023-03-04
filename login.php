<?php
    require 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

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
                                    <h3 class="text-light">Login</h3>
                                    <p><small class="text-light">Selamat Datang</small></p>
                                    <hr>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Username or Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input  type="submit" value="Login" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Sign Up</a></div>
                            <div class="panel-footer">Forgot your Password? <a href="lupa_password.php">atur ulang kata sandi</a></div>
                            
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
