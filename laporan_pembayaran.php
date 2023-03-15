
<?php 
session_start();
if(isset($_SESSION['status_login']) ) {
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan transaksi</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h3>Euphoria<b><br/>Report</b></h3>
	<br/>
	<hr/>
	Tanggal <?= $_GET['tgl1']." -- ".$_GET['tgl2'];  ?>
	<br/>
	<br>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>id</th>
		<th>id</th>
		<th>menu</th>
		<th>harga</th>
		<th>qty</th>

		
	</tr>
	<?php 
	$detail_transaksi = $koneksi -> query("SELECT transaksi.id_transaksi,transaksi.id_meja, kelas.nama_kelas , detail_transaksi.bulan_spp,
							FROM detail_transaksi INNER JOIN transaksi ON transaksi.id_detail_transaksi=detail_transaksi.id_detail_transaksi
                            JOIN menu ON kelas.id_kelas = menu.id_kelas 
							WHERE tgl_bayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
							");
                            
	$i=1;
	$total = 0;
	while($data_bayar=mysqli_fetch_array($detail_transaksi)) :
	 ?>
	<tr>
		<td align="center"><?= $i ?></td>
		<td align="center"><?= $data_bayar['id_detail_transaksi'] ?></td>
		<td align="center"><?= $data_bayar['id_transaksi'] ?></td>
        <td align="center"><?= $data_bayar['nama_pelanggan'] ?></td>
		<td align=""><?= $data_bayar['id_menu'] ?></td>
		<td align=""><?= $data_bayar['harga'] ?></td>
		<td align=""><?= $data_bayar['qty'] ?></td>
		
	</tr>
	<?php $i++; ?>
	

<?php endwhile; ?>

	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Malang , <?= date('d/m/y') ?> <br/>
				Admin,
			<br/>
			<br/>
			<br/>
		<p>____</p>
		</td>
	</tr>
</table>
	<a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</body>
</html>


<?php 
} else {
	header("location : login.php");
}
?>