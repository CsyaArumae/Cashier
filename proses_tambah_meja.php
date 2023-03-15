<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_user.php');
  }
?>
<?php
    $nomor_meja = $_POST ["nomor_meja"];
    
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO meja ( nomor_meja, status_meja ) VALUES ('{$nomor_meja}', 'tersedia')");
    
    if($input){
        echo "<script>alert('Berhasil');location.href='meja.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='tambah_meja.php';</script>";
    }
?>