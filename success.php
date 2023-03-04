<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($db,$confirm_query) or die(mysqli_error($db));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>succes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <img src="img/bg.png" class="card-img-top" alt="...">
<div class="bg2" >
    <div class="menu">
        <marquee behavior="" direction=""><i class="bi bi-exclamation-circle"></i>Menjaga pola makan yang sehat bergizi dan seimbang sangat penting untuk membantu menjaga sitem daya tahan tubuh agar tidak tertular virus covid-19. Selain menjaga pola makan yang sehat bergizi dan seimbang, kita juga harus mematuhi tata tertib cara mencegah virus corona. Terima Kasih Atas Kujungan Anda</marquee>
    </div>
    <div class="title-text mt-5">
            <p id="tentang" >SUKSES</p>
            <h1>Pesanan Berhasil!</h1>
    </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                    <img src="./img/sukses.png" alt="" class="gb-sukses" >
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                    <a href="index.php" class="btn btn-primary ">Lanjutkan</a>
                                    </div>
                                <p class="text-center" >Pesananmu Telah Dikonfirmasi. Terima Kasih Atas Kepercayaan Anda. <a href="products.php">Pesan Lagi?</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </body>
</html>
