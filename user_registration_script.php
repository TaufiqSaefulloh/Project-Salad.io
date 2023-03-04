<?php
    require 'config.php';
    session_start();
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Email Salah. Mengarahkan Anda kembali ke halaman pendaftaran...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($db,$_POST['password'])));
    if(strlen($password)<6){
        echo "Kata sandi harus memiliki minimal 6 karakter. Mengarahkan Anda kembali ke halaman pendaftaran...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $nohp=$_POST['nohp'];
    $alamat=mysqli_real_escape_string($db,$_POST['alamat']);
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($db,$duplicate_user_query) or die(mysqli_error($db));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email sudah ada di database kami");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into users(username,email,password,nohp,alamat) values ('$username','$email','$password','$nohp','$alamat')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($db,$user_registration_query) or die(mysqli_error($db));
        require ("terdaftar.php");
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($db); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
    
?>