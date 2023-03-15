<?php
session_start();
// if ($_SESSION['status_login'] != true) {
//   header('location:login_user.php');
// }
?>
<?php
include "koneksi.php";

echo $nama_pelanggan = $_POST['nama_pelanggan'];
echo $nomor_meja = $_POST['nomor_meja'];
echo $telepon = $_POST["telepon"];
echo $tgl_transaksi = date('Y-m-d');
$keranjang = @$_SESSION['keranjang'];

// echo $_SESSION['id_user'];
// NANTI gini -> id_usere dihapus aja ditabel transaksi, 
// terus id_meja ambil dari post bener, tapi harus relasi sama tabel e
// status e dibikin awal semua e belum_bayar, nanti kalau mau ubah status ke bayar dibikin button
// di halaman history
// gitu yaa, makasiiii

$query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_user, tgl_transaksi, id_meja, nama_pelanggan, status) 
VALUES ('".$_SESSION['id_user']."', '".$tgl_transaksi."', '".$nomor_meja."','".$nama_pelanggan."','"."belum_bayar"."')");

if ($query_transaksi) {
  $id = mysqli_insert_id($koneksi);
  foreach ($keranjang as $key => $value) {
    $qty = $value['qty'];
    $harga = $value['harga'];
    $subtotal = $qty * $harga;
    mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_menu, qty, harga)
                VALUES ('" . $id . "', '" . $value['id_menu'] . "', '" . $qty . "', '" . $value['harga'] . "')");
  }
  unset($_SESSION['keranjang']);
  $update=mysqli_query($koneksi,"update meja set status_meja ='"."tidak tersedia"."' where id_meja = '" . $nomor_meja. "'") or die(mysqli_error($koneksi));
  if($update){
    echo "<script>alert('Next Transaction');location.href='transaksi.php'</script>";
  }
}

// $cek = mysqli_query($koneksi,"select * from pembayaran where menu='".$menu."' and id_meja = '".$id_meja."'");
// else{
//     echo "<script>alert('Gagal Membeli Produk');location.href='checkout.php'</script>";
// }
//       if(mysqli_num_rows($cek) > 0 ){
//           echo "<script>alert('Already Paid In This Month'); location.href='history.php'</script>";
//       } elseif(mysqli_num_rows($cek) < 1){
//           echo "<script>alert('Payment Sucessfully'); location.href='history.php'</script>";
//           $input = mysqli_query($koneksi,"INSERT INTO pembayaran(id_menu, menu, id_meja, nama_customer, telepon. tgl_bayar) VALUES ('".$id_menu."','".$menu."','".$id_meja."''".$nama_customer."''".$telepon."''".$tgl_bayar."'')");

//       }

?>