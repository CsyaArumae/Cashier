<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <?php
    include "navbar.php";

    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <?php
        include "navbar_top.php";
        ?>
        <?php
        include "koneksi.php";
        $keranjang = @$_SESSION['keranjang'];
        echo $_SESSION['id_user'];
        // if (count($keranjang) > 0) {
        //     $tgl_transaksi = date('Y-m-d');
        //     $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi ( id_user, tgl_transaksi)
        //     VALUES ('".$_SESSION['id_user']."', '".$tgl_transaksi."')");

        //     // if ($query_transaksi) {
        //     //     $id = mysqli_insert_id($koneksi);
        //     //     foreach ($keranjang as $key => $value) {
        //     //         $qty = $value['qty'];
        //     //         $harga = $value['harga'];
        //     //         $subtotal = $qty*$harga;
        //     //         mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_menu, qty, subtotal)
        //     //         VALUES ('".$id."', '".$value['id_menu']."', '".$qty."', '".$subtotal."')");
        //     //     }
        //     //     unset($_SESSION['keranjang']);
        //     //     echo "<script>alert('Anda Berhasil Membeli Produk');location.href='history_pembayaran.php'</script>";
        //     // }
        //     // else{
        //     //     echo "<script>alert('Gagal Membeli Produk');location.href='checkout.php'</script>";
        //     // }
        // }
        ?>
        <br>
        <br>
        <div class="card border-dark mb-3">
            <div class="card-header">
                <div class="container">
                    <h1 class="h2 mt-3 mb-2 text-gray-800" style="text-align:left;">Table Customer</h1>
                    <hr>
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <!-- <center><h2><font color="#af007a">Table</font><br></h2></center>
                        <center><p>Enter Data Below</p></center> -->
                                    <form class="requires-validation" action="proses_pembayaran.php" method="post" novalidate>
                                        <div>
                                            <input type="hidden" value="<?= $data_menu['id_menu'] ?>" name="id_menu"></input>
                                        </div>
                                        <div class="mb-1">
                                            <div class="form mb-3">
                                                <input class="form-control" id="inputName" type="text" name="nama_pelanggan" placeholder="Customer Name" required>
                                            </div>
                                            <div class="form mb-3">
                                                <input class="form-control" id="inputName" type="text" name="telepon" placeholder="Phone Number" required>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="form-select mt-3" name="nomor_meja" required>
                                                    <option selected disabled value="">Table</option>
                                                    <option disabled>Pilih Nomor Meja</option>
                                                    <?php
                                                    include "koneksi.php";
                                                    $qry_member = mysqli_query($koneksi, "select * from meja WHERE status_meja = 'tersedia' ");
                                                    while ($data_member = mysqli_fetch_array($qry_member)) {
                                                        echo '<option value="' . $data_member['id_meja'] . '">' . $data_member['nomor_meja'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">You selected a position!</div>
                                                <div class="invalid-feedback">Please select a position!</div>
                                    </form>
                                    <br>
                                    <button type="submit" class="btn btn-primary" style="color:white; text-align:center">Submit</button>
                                    <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>