
<?php 
    if($_GET['id_menu']){
        include "koneksi.php";
        $id_menu = $_GET['id_menu'];
        $qry_hapus=mysqli_query($koneksi,"delete from menu where id_menu='".$id_menu."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus menu');location.href='tampil_menu.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus menu');location.href='tampil_menu.php';</script>";
        }
    }
?>


