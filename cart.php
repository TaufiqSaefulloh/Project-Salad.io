<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($db,$user_products_query) or die(mysqli_error($db));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        // echo "Add items to cart first.";
    ?>
        <script>
        window.alert("Keranjang Kosong!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
        $penanganan = 1000;
        $admin = 6500;
            $sum=$sum+$penanganan+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="assets/app/css/style.css">
    <link rel="stylesheet" href="assets/app/css/main.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <script src="assets/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <div class="bg2">
            <?php 
               require 'header.php';
            ?>
            <img src="img/bg.png" class="card-img-top" alt="...">
<div class="bg2" >
    <div class="menu">
        <marquee behavior="" direction=""><i class="bi bi-exclamation-circle"></i>Menjaga pola makan yang sehat bergizi dan seimbang sangat penting untuk membantu menjaga sitem daya tahan tubuh agar tidak tertular virus covid-19. Selain menjaga pola makan yang sehat bergizi dan seimbang, kita juga harus mematuhi tata tertib cara mencegah virus corona. Terima Kasih Atas Kujungan Anda</marquee>
    </div>
    <div class="title-text mt-5">
            <p>Keranjang</p>
            <h1>Pesanan Saya</h1>
        </div>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                       <?php 
                        $user_products_result=mysqli_query($db,$user_products_query) or die(mysqli_error($db));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
<div id="tagihan-list">
    <div class="card card-tagihan shadow-sm my-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4">
                    <strong class="text-blue-dark"><?php echo $row['name']?></strong> <br>
                    <small><?php echo date('l, d-m-Y');?></small>
                    <hr class="my-1 d-sm-block d-md-none">
                </div>
                <div class="col-6 col-md-2">
                    <small class="text-nowrap text-secondary">Harga</small>
                    <p class="mb-0"><?php echo $row['price']?></p>
                </div>
                <div class="col-6 col-md-2">
                    <small class="text-nowrap text-secondary">No Pesanan</small>
                    <p class="mb-0"><?php echo $counter ?></p>
                </div>
                <div class="col-6 col-md-2">
                    <small class="text-nowrap text-secondary">Biaya penanganan</small>
                    <p class="mb-0"><?php echo $penanganan ?></p>
                </div>
                <div class="col-6 col-md-2">
                    <small class="text-nowrap text-secondary">Jumlah</small>
                    <p class="mb-0">x1</p>
                </div>
                <div class="col-6 col-md-2">
                <a href='cart_remove.php?id=<?php echo $row['id'] ?>' class="btn btn-warning ">Hapus Pesanan</a>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input pilih-tagihan" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">
                    <span class="border border-info rounded text-info px-2 py-1 pilih-tagihan-label">Pilih Menu</span>
                </label>
            </div>
        </div>
    </div>
<?php $counter=$counter+1;}?>


</div>
                        <tr >
                            
                            <th>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                Total
                                </div>
                            </th>
                            <th>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                Rp <?php echo $sum;?>/-
                                </div>
                            </th>
                            <th>
                            <a id="submit-tagihan" class="btn btn-primary col-4 text-white ms-4" type="button" name="submit">Bayar Sekarang</a>
                            
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
    <div class="container" >
            <?php 
                        $user_products_result=mysqli_query($db,$user_products_query) or die(mysqli_error($db));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       
                         ?>
            <div class="modal fade" id="information-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rincian Pesanan</h5>
                <button type="button" class="close " data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="loading">
                    <i class="fa fa-spinner fa-spin"></i> Sedang memuat...
                </p>
                <div class="row" id="tagihan-terpilih" style="display: none;">
                    
                    <div class="col-md-6 mb-2"><?php
                    while($row=mysqli_fetch_array($user_products_result)){
                           ?>
                    <small class="text-nowrap text-secondary">No Pesanan: </small>
                    <p class="mb-0"><?php echo $counter ?></p>
                
                        <strong class="mb-0"><?php echo $row['name']?></strong>
                        <p class="py-0 mb-0"><small><?php echo date('l, d / m / Y');?></small></p>
                        <div class="callout callout-default py-1 mb-2 border-top-0 border-right-0 border-bottom-0">
                            Sebesar: <small class="align-top text-secondary">Rp</small><?php echo $row['price']?>
                        </div>
                    </div>
                    <?php $counter=$counter+1;}?>
                    <hr>
                    <div class="col-md-6">
                        <div class="callout callout-info py-1 mb-2 border-top-0 border-right-0 border-bottom-0">
                            <p>Admin
                            <small class="align-top text-secondary">Rp</small><?php echo $admin?></p>
                            <hr>
                            <h5 class="mb-3">Total Pembayaran</h5>
                            <p class="lead mb-0">
                                <small class="align-top text-secondary">Rp</small><?php echo $sum=$sum+$admin;?>
                            </p>
<hr>
                            <p class="mt-5">
                                <small>
                                    * Dengan menekan tombol <em>Bayar</em>,
                                    secara otomatis Anda menyetujui <a href="#">syarat dan ketentuan</a> yang berlaku
                                    serta mendapatkan Nomor Virtual Account [NAMA BANK] dengan masa aktif terbatas.
                                    Segera lakukan pembayaran dengan transfer ke Nomor Virtual Account yang Anda dapatkan.
                                </small>
                            </p>

                            <p class="mt-3">
                                <button type="button" class="btn btn-info" id="bayar">Lanjutkan Pembayaran</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        </div>
        </div>
</div>



<script type="text/javascript">
    $('#submit-tagihan').on('click', function (e) {
        $('#information-modal').modal('show');
        $('#information-modal').on('shown.bs.modal', function () {
            setTimeout(function () {
                $('#loading').attr('style', 'display: none;');
                $('#tagihan-terpilih').removeAttr('style', 'style');
            }, 1000);
        });
    });

    $('#bayar').on('click', function (e) {
        window.location.replace("virtual-account.php");
    });

    $('.card-tagihan').hover(
    function() { $(this).addClass('shadow'); },
    function() { $(this).removeClass('shadow'); }
    );

    $('.pilih-tagihan').on('change', function(e) {

        const checkbox = $(this);
        console.log(checkbox[0].labels);

        if (checkbox.is(':checked')) {
            checkbox.closest('.card').addClass('border-info');
        } else {
            checkbox.closest('.card').removeClass('border-info');
        }
    });
</script>
<script src="assets/popperjs/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
