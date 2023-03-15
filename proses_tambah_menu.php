<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_user.php');
  }
?>

<?php
	if($_POST){
		$nama_menu=$_POST['nama_menu'];
		$deskripsi=$_POST['deskripsi'];
		$harga=$_POST['harga'];
		
		//mulai upload file
		$nama = $_FILES['foto']['name'];
		$ukuran	= $_FILES['foto']['size'];
		$file_tmp = $_FILES['foto']['tmp_name'];
		//akhir upload file
		
		if(empty($nama_menu)){
			echo "<script>alert('nama menu tidak boleh kosong');location.href='tambah_menu.php';</script>";
		} elseif(empty($deskripsi)){
			echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_menu.php';</script>";
		} elseif(empty($harga)){
			echo "<script>alert('harga tidak boleh kosong');location.href='tambah_menu.php';</script>";
		} else {
			include "koneksi.php";
			
			//mulai upload file
			move_uploaded_file($file_tmp, 'foto/'.$nama);
			$insert=mysqli_query($koneksi,"insert into menu (nama_menu, deskripsi, harga, foto) value ('".$nama_menu."','".$deskripsi."', '".$harga ."','".$nama."')");
			//akhir upload file
			
			if($insert){
				echo "<script>alert('Sukses menambahkan menu');location.href='menu.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan menu');location.href='tambah_menu.php';</script>";
			// echo "insert into menu(nama_menu,deskripsi,harga) value ('".$nama_menu."','".$deskripsi."','".$harga."')";
			}
		}
	}
?>