<?php
    if($_GET['id_user']){
        include "koneksi.php";
        $query_hapus=mysqli_query($koneksi,"DELETE FROM user where id_user='".$_GET['id_user']."'");
        // echo "DELETE FROM user where id_user='".$_GET['id_user']."'";
    if($query_hapus){
        echo "<script>alert('Sucessfully Delete user');location.href='login_user.php';</script>";
    } else {
        echo "<script>alert('Failed Delete user');location.href='profile.php';</script>";
        }
    } 
?>