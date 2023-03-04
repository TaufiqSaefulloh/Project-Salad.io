<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="bg" >
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container py-5">
                <div class="row my-5 d-flex ">
                
                    <div class="col-lg-4 col-md-6">

                        <div class="panel-body">
                            <div class="card-body">

                        <form action="" method="post">
                        <h3 class="text-light">Change Password</h3>
                        <hr>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" required="" type="username" autocomplete="off" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" required="" id="txtNewPassword" type="password" name="password" placeholder="Password">
                                </div>
                                       <div class="form-group">
                                    <label>Ulangi Password</label>
                                    <input class="form-control" required="" id="txtConfirmPassword" type="password" name="password2" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                
                                </div>
                                <input name="simpan" class="btn btn-primary mt-3" type="submit" value="Change">
                              
                            </form>

                            </div>
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
