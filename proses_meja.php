<?php 
     include "koneksi.php";
     // if(empty($password)){
    $update_meja=mysqli_query($koneksi,"update meja set status_meja='"."lunas"."' where id_meja = '" . $_GET['id_meja'] . "'") or die(mysqli_error($koneksi));

    // $query_meja = mysqli_query($koneksi,
    // "SELECT * FROM meja where where id_meja = '" . $_GET['id_meja'] . "'");
    // $data_meja = mysqli_fetch_array($query_meja);

    $query_meja = mysqli_query($koneksi, "select * from meja where id_meja = '".$_GET['id_meja']."'");
    $data_meja = mysqli_fetch_array($query_meja);
    // echo $data_menu['id_meja'];

    if($update_meja){
        $update_meja=mysqli_query($koneksi,"update meja set status_meja ='"."tersedia"."' where id_meja = '" . $data_meja['id_meja']. "'") or die(mysqli_error($koneksi));
        if($update_meja){
          echo "<script>alert('Success');location.href='meja.php'</script>";
        }
    }
?>