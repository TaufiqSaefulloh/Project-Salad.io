<?php
    require 'config.php';
?>
<?php    
    function forgot_password()
    {
        global $db;
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $password2 = md5($_POST['password2']);
    
        if ($password != $password2) {
            echo '<script>alert("password tidak sama")</script>';
        }else{
            // SELECT
            $select = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
            $cek = mysqli_num_rows($select);
    
            if ($cek>0) {
                $update =  mysqli_query($db, "UPDATE users SET password='$password' WHERE username='$username'");
                echo '<script>alert("password sukses diubah")</script>';
            }else{
                echo '<script>alert("Username tidak ditemukan")</script>';
            }
        }
        
    }
?>