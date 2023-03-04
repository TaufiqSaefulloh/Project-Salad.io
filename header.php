
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-secondary">
            <div class="container">
              <img src="./img/logo-saladio.png" class="img-fluid" alt="...">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active me-4" aria-current="page" href="index.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-4" href="products.php">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-4" href="tentang.php">Tentang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-4" href="kontak.php">Kontak</a>
                  </li>
                  
                </ul>
              </div>
                   
                       <ul class="nav navbar-nav navbar-right">
                       
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li class="nav-item">
                            <a class="btn btn-primary mt-3" href="cart.php"><i class="bi bi-cart-plus-fill"></i>Cart</a>
                          </li>
                           <section>
              
                            <!-- Button trigger modal -->
                                <div class="d-grid gap-2">
                                <img src="./img/people.png" alt="user" class="btn bg-black p-2 text-white rounded-circle ms-3" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"/>
                                </div>
                            

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                      Pengguna
                                        
                                      </h1>
                                        <i type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></i>
                                      </div>
                                      <div class="modal-footer">
                                      <li class="nav-item">
                                        <a class="btn btn-info" href="settings.php"><i class="bi bi-tools"></i>Ubah Kata Sandi</a>
                                     </li>
                                        <a href=" logout.php" type="button" class="btn btn-info">Log Out</a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            </section>
                           <?php
                           }else{
                            ?>
                            <li><a href="login.php" class="btn btn-secondary me-2">Masuk</a></li>
                           <li><a href="signup.php" class="btn btn-success">Daftar</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
               </div> 
</nav>
</body>
</html>