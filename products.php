<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="style.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"></link>
    </head>
    <body>
    <div class="bg2">
        <?php
            require 'header.php';
        ?>
         
<img src="img/bg.png" class="card-img-top" alt="...">
        <div class="menu">
                    <a href="#makanan" class="text-white" style="text-decoration: none;"><i class="bi bi-palette-fill"></i>Makanan</a>
                    <a href="#minuman" class="text-white" style="text-decoration: none;"><i class="bi bi-cup-straw"></i>Minuman</a>
        </div>

<!-- batas -->
<div class="container" >
<div class="title-text mt-5">
            <p id="makanan" >MAKANAN</p>
            <h1>Aneka Salad</h1>
</div>
 
<!-- batas -->
<div class="row row-cols-1 row-cols-md-4 g-2">
  <div class="col ">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad1.png" alt="salad1"></a>
      <div class="card-body text-white bg-success ">
        <h3 class="card-title text-center">Hail Caesar</h3>
        <p class="card-text">Selada romaine, bacon sapi, keju parmesan, eggs, croutons, classic caesar
        </p>
      </div>
      <div class="caption bg-success ">
                                <h5 class="text-center text-white" ><strong>Price: Rp 18.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                        ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-info " name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <a href="cart.php"><img class="img-fluid" src="img/salad 2.png" alt="salad 2"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Tuna San</h3>
        <p class="card-text">Selada romaine, tuna panggang, alpukat, tomat ceri, edamame, jeruk mandarin, biji wijen, wasabi honey soy</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 3.png" alt="salad 3"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Cobb</h3>
        <p class="card-text">Selada romaine, daging ayam berlapis gandum, bacon sapi, keju cheddar, eggs, alpukat, tomat ceri, bawang merah, ranch
        </p>
      </div>
      <div class="caption bg-success">
                                    <h5 class="text-center text-white" ><strong>Price: Rp 18.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 4.png" alt="salad 4"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title">Go Ginza</h3>
        <p class="card-text">Kubis merah & putih, tahu sutra, wortel, ketimun, edamame, soba, biji wijen, japanese miso
        </p>
      </div>
      <div class="caption bg-success">
                                    <h5 class="text-center text-white" ><strong>Price: Rp 20.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
</div>
<!-- batas -->
<!-- batas -->
<div class="row row-cols-1 row-cols-md-4 g-2 mt-3">
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 5.png" alt="salad 5"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Omega 3 Baby</h3>
        <p class="card-text">Selada romaine, rocket, salmon asap, akar bit, brokoli, tomat ceri, bawang merah, biji labu
        </p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong>Price: Rp 18.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 6.png" alt="salad 6"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Yeobo</h3>
        <p class="card-text">Warm quinoa, bayam, daging sapi bulgogi, eggs, jamur panggang, edamame, jagung manis</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong>Price: Rp 20.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 7.png" alt="salad 7"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Iron "Wo" Man</h3>
        <p class="card-text">Selada romaine, daging sapi bulgogi, kentang, lobak putih, tomat ceri, jagung manis
        </p>             
      </div>
      <div class="caption bg-success">
                                    <h5 class="text-center text-white" ><strong>Price: Rp 25.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 8.png" alt="salad 8"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Crab Lah</h3>
        <p class="card-text">Selada romaine, crab stick, eggs, sweet potato noodles, tomat ceri, croutons, bawang merah
        </p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 18.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-info" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
</div>
<!-- batas -->
<div class="row row-cols-1 row-cols-md-4 g-2 mt-3">
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 5.png" alt="salad 5"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Arriba</h3>
        <p class="card-text">Warm quinoa, rocket, dada ayam panggang, keju cheddar, alpukat, kacang hitam, tomat ceri</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong>Price: Rp 18.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 6.png" alt="salad 6"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Truffle Wonder</h3>
        <p class="card-text">Selada romaine, rocket, keju feta, jagung manis, tomat ceri, jeruk mandarin, almond</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 11.png" alt="salad 7"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Dark Matter</h3>
        <p class="card-text">Selada romaine, kubis merah & putih, galangal chicken thigh, wortel, jagung manis, apel hijau</p>             
      </div>
      <div class="caption bg-success">
                                    <h5 class="text-center text-white" ><strong>Price: Rp 25.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-info" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/salad 12.png" alt="salad 8"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Bold Bulgogi</h3>
        <p class="card-text">Selada romaine, daging sapi bulgogi, kentang, lobak putih, tomat ceri, jagung manis</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 18.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
</div>
    </div>




<!-- batas -->
<div class="container" >
<div class="title-text mt-5">
            <p id="minuman" >MINUMAN</p>
            <h1>Minuman Segar</h1>
</div>
<!-- batas -->
<div class="row row-cols-1 row-cols-md-4 g-2 mt-3">
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 1.png" alt="salad 13"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Aneka Juz</h3>
        <p class="card-text">Tersedia variasi populer pilihan sari buah Orange, Pink Guava, Apple, Mango, Pineappledan Lemon</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 10.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
<!-- batas -->
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 2.png" alt="salad 14"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lemon Tea</h3>
        <p class="card-text">campuran jahe, sereh dan lemon membantu menjaga kesehatan tubuh</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-info" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>

<!-- batas -->
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 3.png" alt="salad 15"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lecy Tea</h3>
        <p class="card-text">Es teh leci segar dan harum,cocok sekali di hidangkan di siang hari dapat juga dinikmati dengan keadaan panas.</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-info" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
<!-- batas -->
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 4.png" alt="salad 16"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lecy Squash</h3>
        <p class="card-text">Es leci soda segar cocok  untuk bersantai dapat juga dinikmati dengan keadaan panas</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-info" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
</div>

<!-- batas -->
<div class="row row-cols-1 row-cols-md-4 g-2 mt-3">
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 5.png" alt="salad 17"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Air Mineral</h3>
        <p class="card-text">Air minum dalam kemasan tersedia berbagai merk ternama</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 5.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
<!-- batas -->
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 6.png" alt="salad 18"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Kopi Susu</h3>
        <p class="card-text">Campuran antara kopi bubuk dengan aroma yang khas, gula dan rasa susu yang nikmat</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 10.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=18" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
<!-- batas -->
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 7.png" alt="salad 19"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Es Kuwut</h3>
        <p class="card-text">Perpaduan air kelapa dan buah kelapa di tambah manisnya buah melon dan bahan lainnya </p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(19)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=19" class="btn btn-block btn-info" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
<!-- batas -->
<div class="col">
    <div class="card h-100">
    <a href="cart.php"><img class="img-fluid" src="img/minuman 8.png" alt="salad 20"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Teh Tarik</h3>
        <p class="card-text">Minuman teh ,susu, krimer dan gula. Aroma dan rasa yang pas untuk minuman teh tarik </p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong>Price: Rp 15.000</strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block"><i class="bi bi-cart-plus me-2" ></i>Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(20)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=20" class="btn btn-block btn-info" name="add" value="add" "><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
    </div>
  </div>
</div>
</div>
<!-- batas -->
<section>
<div class="back-to-top">
  <a href="#"id="back-to-top" title="back to top"> 
    <i class="bi bi-arrow-up-square-fill"></i>
  </a>
</div>
</section>
</div>


<script>            
  $(window).scroll(function() {
  if($(this).scrollTop() &gt; 200) {
    $(&#39;#back-to-top&#39;).fadeIn();
  } else {
    $(&#39;#back-to-top&#39;).fadeOut();
  }
  });

  $(&#39;#back-to-top&#39;).hide().click(function() {
  $(&#39;html, body&#39;).animate({scrollTop:0}, 1000);
  return false;
});
</script>
    </body>
</html>
