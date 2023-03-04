<?php
    require 'config.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from users_items where user_id='$user_id' and item_id='$item_id'";
    $delete_query_result=mysqli_query($db,$delete_query) or die(mysqli_error($db));
    header('location: cart.php');
?>