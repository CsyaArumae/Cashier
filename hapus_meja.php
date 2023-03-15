
<?php 
    if($_GET['id_meja']){
        include "koneksi.php";
        $id_meja = $_GET['id_meja'];
        $qry_hapus=mysqli_query($koneksi,"delete from meja where id_meja='".$id_meja."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus meja');location.href='meja.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus meja');location.href='meja.php';</script>";
        }
    }
?>


