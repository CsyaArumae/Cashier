
<?php 
    if($_GET['id_transaksi']){
        include "koneksi.php";
        $id_transaksi = $_GET['id_transaksi'];
        $qry_hapus=mysqli_query($koneksi,"delete from transaksi where id_transaksi='".$id_transaksi."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus transaksi');location.href='transaksi.php';</script>";
        } else {
            // echo "<script>alert('Gagal hapus transaksi');location.href='transaksi.php';</script>";
        }
    }
?>


