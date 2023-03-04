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
        <title>index</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    </head>
    <body>
    <div class="bg2" >
           <?php
            require 'header.php';
           ?>

<div class="bg3">
  <div class="container">
    <div class="row d-flex align-items-center ">
      <div class="col ms-4">
        <h1 class="text-hijau">SALAD.IO</h1>
        <p>
          Terbuat dari sayuran kualitas terbaik yang dapat menurunkan kalori
          dan membantu proses diet.Mengandung serat yang dapat membantu
          menahan rasa lapar.
        </p>
        <!-- <button type="button" class="btn btn-success">Beli Sekarang!</button> -->
        <a href="products.php" class="btn btn-success">Pesan Sekarang</a>
      </div>

      <div class="col mt-5">
        <img src="./img/hero-saladio.png" alt="" />
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>
<!-- batas -->
<div class="title-text">
        <p id="produk" >PRODUK</p>
        <h1 id="makanan" >MAKANAN SEHAT</h1>
    </div>
<!-- batas -->
<!-- Swiper -->
<div class="container" >
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/salad1.png" alt="salad1"></a>
      <div class="card-body text-white bg-success float-start">
        <h3 class="card-title text-center">Hail Caesar</h3>
        <p class="card-text">Selada romaine, bacon sapi, keju parmesan, eggs, croutons, classic caesar
        </p>
      </div>
      <div class="caption bg-success ">
                                <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
    <div class="card h-100">
      <a href="products.php"><img class="img-fluid" src="img/salad 2.png" alt="salad 2"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Tuna San</h3>
        <p class="card-text">Selada romaine, tuna panggang, alpukat, tomat ceri, edamame, jeruk mandarin, biji wijen, wasabi honey soy</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
    <div class="card h-100">
      <a href="products.php"><img class="img-fluid" src="img/salad 3.png" alt="salad 3"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Cobb</h3>
        <p class="card-text">Selada romaine, daging ayam berlapis gandum, bacon sapi, keju cheddar, eggs, alpukat, tomat ceri, bawang merah, ranch</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/salad 4.png" alt="salad 4"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title">Go Ginza</h3>
        <p class="card-text">Kubis merah & putih, tahu sutra, wortel, ketimun, edamame, soba, biji wijen, japanese miso
        </p>
      </div>
      <div class="caption bg-success">
                                    <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/salad 5.png" alt="salad 5"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Omega 3 Baby</h3>
        <p class="card-text">Selada romaine, rocket, salmon asap, akar bit, brokoli, tomat ceri, bawang merah, biji labu
        </p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div></div>
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/salad 6.png" alt="salad 6"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Yeobo</h3>
        <p class="card-text">Warm quinoa, bayam, daging sapi bulgogi, eggs, jamur panggang, edamame, jagung manis</p>
      </div>
      <div class="caption bg-success">
                                <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
</div>
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/salad 7.png" alt="salad 7"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Iron "Wo" Man</h3>
        <p class="card-text">Selada romaine, daging sapi bulgogi, kentang, lobak putih, tomat ceri, jagung manis
        </p>             
      </div>
      <div class="caption bg-success">
                                    <h5 class="text-center text-white" ><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
</div>
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/salad 8.png" alt="salad 8"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Crab Lah</h3>
        <p class="card-text">Selada romaine, crab stick, eggs, sweet potato noodles, tomat ceri, croutons, bawang merah
        </p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
        
    </div>
<!-- batas -->
<br><br><br>
<div class="title-text mt-5">
        <p id="minuman" >MINUMAN</p>
        <h1>Minuman Sehat</h1>
    </div>
<!-- batas -->
<!-- Swiper -->
<div class="container" >
<div class="swiper mySwiper ">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 1.png" alt="salad 13"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Aneka Juz</h3>
        <p class="card-text">Tersedia variasi populer pilihan sari buah Orange, Pink Guava, Apple, Mango, Pineappledan Lemon</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-primary" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 2.png" alt="salad 14"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lemon Tea</h3>
        <p class="card-text">campuran jahe, sereh dan lemon membantu menjaga kesehatan tubuh</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 4.png" alt="salad 16"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lecy Squash</h3>
        <p class="card-text">Es leci soda segar cocok  untuk bersantai dapat juga dinikmati dengan keadaan panas</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 3.png" alt="salad 15"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lecy Tea</h3>
        <p class="card-text">Es teh leci segar dan harum,cocok sekali di hidangkan di siang hari dapat juga dinikmati dengan keadaan panas.</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 3.png" alt="salad 15"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Lecy Tea</h3>
        <p class="card-text">Es teh leci segar dan harum,cocok sekali di hidangkan di siang hari dapat juga dinikmati dengan keadaan panas.</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary" name="add" value="add"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
</div>
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 6.png" alt="salad 18"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Kopi Susu</h3>
        <p class="card-text">Campuran antara kopi bubuk dengan aroma yang khas, gula dan rasa susu yang nikmat</p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=18" class="btn btn-block btn-primary" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
</div>
        <div class="swiper-slide">
        <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 7.png" alt="salad 19"></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Es Kuwut</h3>
        <p class="card-text">Perpaduan air kelapa dan buah kelapa di tambah manisnya buah melon dan bahan lainnya </p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(19)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=19" class="btn btn-block btn-primary" name="add" value="add" ><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
</div>
        <div class="swiper-slide">
    <div class="card h-100">
    <a href="products.php"><img class="img-fluid" src="img/minuman 8.png" alt=""></a>
      <div class="card-body text-white bg-success">
        <h3 class="card-title text-center">Crab Lah</h3>
        <p class="card-text">Minuman teh ,susu, krimer dan gula. Aroma dan rasa yang pas untuk minuman teh tarik
        </p>                          
      </div>
      <div class="caption bg-success ">
                                    <h5 class="text-center text-white"><strong></strong></h5>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                          <button class="btn-produk2 mb-3">
                                            <a href="login.php" role="button" class="bi bi-cart-plus btn-block text-dark"></a>
                                          </button>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ditambahkan</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><i class="bi bi-cart-plus me-2"></i>Add To Cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
  </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
<br><br><br><br>
    </div>
<!-- batas -->

</div>






<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
    </body>
</html>