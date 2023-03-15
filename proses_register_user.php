<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_user.php');
  }
?>
<?php
	if($_POST){
		$nama_user=$_POST['nama_user'];
        $username=$_POST['username'];
		$password=$_POST['password'];
		
		if(empty($nama_user)){
			echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($username)){
			echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
		} elseif(empty($password)){ 	
			echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
		} else {
			include "koneksi.php";
			$insert=mysqli_query($koneksi,"insert into user (nama_user, username, password) value ('".$nama_user."','".$username."','".md5($password)."')");
            
			if($insert){
				echo "<script>alert('Sukses menambahkan user');location.href='login_user.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan user');location.href='registrasi.php';</script>";
			}
		}
	}
?>