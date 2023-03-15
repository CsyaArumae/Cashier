<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_user.php');
  }
?>
<?php
    $nama_customer = $_POST ["nama_customer"];
    $telepon = $_POST ["telepon"];
    
    include "./koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO customer ( nama_customer, telepon) VALUES ('{$nama_customer}', '{$telepon}')");
    
    if($input){
        echo "<script>alert('Berhasil');location.href='history.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='pembayaran.php';</script>";
    }
?>