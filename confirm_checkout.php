<?php
    session_start();
    include "koneksi.php";

    $id_menu = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    // $tgl_bayar = $_POST['tgl_bayar'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];

    $pembayaran = @$_SESSION['pembayaran'];
    if (count($pembayaran) > 0) {
        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_menu, nama_menu, harga, status, dibayar, id_user)
        VALUES ('".$id_mem."', '".$tgl."', '".$batas_waktu."', '".$status."', '".$dibayar."', '".$_SESSION['id_user']."')");
        
        //  $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user)
        //  VALUES ('".$id_mem."', '".$tgl."', '".$batas_waktu."', '".$tgl_bayar."', '".$status."', '".$dibayar."', '".$_SESSION['id_admin']."')");
 
        if ($query_transaksi) {
            $id = mysqli_insert_id($koneksi);
            foreach ($pembayaran as $key => $value) {
                $qty = $value['qty'];
                $harga = $value['harga'];
                $subtotal = $qty*$harga;
                mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_menu, qty, subtotal)
                VALUES ('".$id."', '".$value['id_menu']."', '".$qty."', '".$subtotal."')");
            }
            unset($_SESSION['pembayaran']);
            //unset($_SESSION['id_member']);
            echo "<script>alert('Berhasil pembayaran laundry');location.href='transaksi.php'</script>";
        }
        else{
            echo "<script>alert('Gagal pembayaran laundry');location.href='confirm_pembayaran.php'</script>";
            //var_dump($_SESSION['pembayaran']);
        }
    }
?>