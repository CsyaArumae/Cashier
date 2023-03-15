<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location:index.php');
}
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
        include "koneksi.php";
    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <?php
        include "navbar_top.php";
        ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include "navbar.php"; ?>
        </div>    
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <h1 class="h2 mt-3 mb-2 text-gray-800" style="text-align:center;">CUSTOMER DATA</h1>
                    <hr>
                    <h5>Find Customer  :</h5>
                    <form action="tampil_customer.php" method="POST" class="w-100 d-none d-md-inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" name="cari" placeholder="Masukkan keyword id / nama" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <h6 class="mb-4">*Masukkan keyword dan klik ikon search/enter<br>*Kosongkan dan klik ikon search/enter unutk menampilkan semmua data</h6>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data customer</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID customer</th>
                                            <th scope="col">NAMA customer</th>
                                            <th scope="col">JENIS KELAMIN</th>
                                            <th scope="col">TELEPON</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "koneksi.php";
                                        if (isset($_POST["cari"])) {
                                            // if ($_POST["cari"] != NULL)
                                            // jika ada keyword pencarian
                                            $cari = $_POST["cari"];
                                            $query_customer = mysqli_query($koneksi, "SELECT * FROM customer WHERE 
                                                            id_customer = '$cari' OR nama_customer LIKE '%$cari%'");
                                        } else {
                                            // jika tdk ada keyword pencarian
                                            $query_customer = mysqli_query($koneksi, "SELECT * FROM customer");
                                        }
                                        while ($data_customer = mysqli_fetch_array($query_customer)) { ?>
                                            <tr>
                                                <td><?= $data_customer['id_customer']; ?></td>
                                                <td><?= $data_customer['nama_customer']; ?></td>
                                                <td><?= $data_customer['tlp']; ?></td>
                                                <td>
                                                    <a href="ubah_customer.php?id_customer=<?php echo $data_customer['id_customer'] ?>" class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="hapus_customer.php?id_customer=<?php echo $data_customer['id_customer'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>