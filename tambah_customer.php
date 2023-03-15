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
  New Customer 
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
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light mt-3 mb-3">New Order</h3>
                                </div>
                                <div class="card-body">
                                    <form action="proses_tambah_customer.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputName" type="text" name="nama_customer" placeholder="Nama" required>
                                            <label for="inputName">Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="inputDt" type="" name="jenis" placeholder="dine in/take away" required>
                                                <option></option>
                                                <option value="Dinein">Mie</option>
                                                <option value="Takeaway">Nasi</option>
                                            </select>
                                            <label for="inputDt">Pesanan</label>
                                        </div>
                                        <!-- <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPsn" type="text" name="pesanan" placeholder="Pesanan" required>
                                            <label for="inputPsn">Pesanan</label>
                                        </div> -->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat" required></textarea>
                                            <label for="inputAlamat">Table</label>
                                        </div>
                                        <button class="w-100 btn btn-lg btn-primary" type="submit">Tambah customer</button>
                                    </form>
                                </div>
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