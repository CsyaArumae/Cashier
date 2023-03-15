<?php
    include "koneksi.php";

    $menu = $_POST["menu"];
    $harga = $_POST["harga"];

    $query = "INSERT INTO paket (menu, harga) VALUES ('".$menu."', '".$harga."')";
    $tambah = mysqli_query($koneksi, $query);

    if ($tambah) {
        echo "<script>alert('Berhasil menambahkan');location.href='checkout.php';</script>";
    }
    else {
        echo "<script>alert('Gagal menambahkan');location.href='checkout.php';</script>";
    }
?>