<?php
session_start();
if ($_POST) {
    include "koneksi.php";

    $query_get_menu = mysqli_query($koneksi, "SELECT * FROM menu where id_menu = '" . $_GET['id_menu'] . "'");
    $data_menu = mysqli_fetch_array($query_get_menu);

    // $_SESSION['checkout'][]=array(
    //     'id_menu' => $data_menu['id_menu'],
    //     'nama_menu' => $data_menu['nama_menu'],
    //     // 'qty' => $_POST['jumlah_menu'],
    //     'harga' => $data_menu['harga']
    // );
    // $_SESSION['checkout'][] = array(
    //     'id_menu' => $data_menu['id_paket'],
    // );

    $_SESSION['keranjang'][] = array(
        'id_menu' => $data_menu['id_menu'],
        'nama_menu' => $data_menu['nama_menu'],
        'qty' => $_POST['jumlah_menu'],
        'harga' => $data_menu['harga']
    );
}

header('location: checkout.php');
