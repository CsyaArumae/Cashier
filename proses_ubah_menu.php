<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_user.php');
  }
?>
<?php
if($_POST){
    $nama_menu=$_POST["nama_menu"];
    $deskripsi=$_POST["deskripsi"];
    $harga=$_POST["harga"];
    $id=$_GET["id"];
    if(empty($nama_menu)){
        echo "<script>alert('nama menu tidak boleh kosong');location.href='tambah_menu.php';</script>";
 
    }  else {
        include "koneksi.php";
        // if(empty($password)){
            $update=mysqli_query($koneksi,"update menu set nama_menu='".$nama_menu."', deskripsi='".$deskripsi."', harga='".$harga."' where id_menu = '" . $id . "'") or die(mysqli_error($koneksi));
            if($update){
                echo "<script>alert('Sukses update menu');
                location.href='tampil_menu.php';</script>";
            } else {
                echo "<script>alert('Gagal update menu');
                location.href='ubah_menu.php?id_menu=".$id_menu."';</script>";
            }
        // } else {
        //     $update=mysqli_query($koneksi,"update menu set nama_menu='".$nama_menu."', deskripsi='".$deskripsi."', harga='".$harga."") or die(mysqli_error($koneksi));            if($update){
        //         echo "<script>alert('Sukses update menu');location.href='tampil_menu.php';</script>";
        //     } else {
        //         echo "<script>alert('Gagal update menu');location.href='ubah_menu.php?id_menu=".$id_menu."';</script>";
        //     }
        // }
        
    } 
}
?>