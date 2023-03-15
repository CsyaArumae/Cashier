<?php 
     include "koneksi.php";
     // if(empty($password)){
    $update_transaksi=mysqli_query($koneksi,"update transaksi set status='"."lunas"."' where id_transaksi = '" . $_GET['id_transaksi'] . "'") or die(mysqli_error($koneksi));

    // $query_transaksi = mysqli_query($koneksi,
    // "SELECT * FROM transaksi where where id_transaksi = '" . $_GET['id_transaksi'] . "'");
    // $data_transaksi = mysqli_fetch_array($query_transaksi);

    $query_transaksi = mysqli_query($koneksi, "select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
    $data_transaksi = mysqli_fetch_array($query_transaksi);
    // echo $data_menu['id_meja'];

    if($update_transaksi){
        $update_meja=mysqli_query($koneksi,"update meja set status_meja ='"."tersedia"."' where id_meja = '" . $data_transaksi['id_meja']. "'") or die(mysqli_error($koneksi));
        if($update_meja){
          echo "<script>alert('Anda Berhasil Membeli Produk');location.href='transaksi.php'</script>";
        }
    }
?>