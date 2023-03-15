<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location:login_user.php');
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
        <div class="container-fluid">
            <div class="page-header min-height-150 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <!-- <h2 class="h2 mt-3 mb-2 text-gray-800" style="text-align:center;">Euphoria Cafe Menu</h2> -->
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="./foto/pink.jpg" class="w-100 border-radius-lg shadow-sm">
                            <!-- <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm"> -->
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h3 class="mb-1">
                                Euphoria Cafe ♡
                            </h3>
                            <p class="mb-0 font-weight-light text-sm">
                            Have to be careful !!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- <div class="container-fluid py-3">
              <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('./foto/curved11.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="fas fa-wifi text-white p-2"></i>
                    <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                          <h6 class="text-white mb-0">Euphoria Cafe</h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                          <h6 class="text-white mb-0">11/25</h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="./foto/mastercard.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> -->
    <div class="container-fluid py-3">
    <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Payment Method</h6>
                    </div>
                    <!-- <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                    </div> -->
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="./foto/mastercard.png" alt="logo">
                        <h6 class="mb-0">1267&nbsp;&nbsp;&nbsp;9076&nbsp;&nbsp;&nbsp;2378&nbsp;&nbsp;&nbsp;7852</h6>
                        <!-- <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="./foto/visa.png" alt="logo">
                        <h6 class="mb-0">1456&nbsp;&nbsp;&nbsp;9052&nbsp;&nbsp;&nbsp;1967&nbsp;&nbsp;&nbsp;5248</h6>
                        <!-- <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h3>History Payment</h3>
                        </div>
                        <div class="container-fluid py-4">
                        <div class="card-body">
                            <form action="transaksi.php" method="post" class="d-flex">
                                <Input class="form-control me-1" type="search" name="cari" placeholder="find name">
                                <!-- <button type="submit" class="btn btn-outline">search </button> -->
                            </form>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>

                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Table Number</th> -->
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                        </tr>

                                    <tbody style="color:grey;">
                                        <?php
                                        include "koneksi.php";
                                        if (isset($_POST["cari"])) {
                                            $cari =  $_POST['cari'];
                                            $query_bayar = mysqli_query(
                                                $koneksi,
                                                "SELECT * FROM transaksi where tgl_transaksi = ' $cari ' or nama_pelanggan like '$cari%' ORDER BY tgl_transaksi DESC"
                                            );
                                        } else {
                                            //jika tidak ada keyword pencarian 
                                            $query_bayar = mysqli_query($koneksi, "select * from transaksi join meja on transaksi.id_meja = meja.id_meja ORDER BY transaksi.id_transaksi DESC");
                                        }
                                        while ($data_bayar = mysqli_fetch_array($query_bayar)) { ?>
                                            <?php
                                            $query_transaksi = mysqli_query($koneksi, "select * from transaksi where id_transaksi = '" . $data_bayar['id_transaksi'] . "'");
                                            $data_transaksi = mysqli_fetch_array($query_transaksi);
                                            ?>
                                            <tr style="color:black">
                                                <input type="hidden" value="<?php echo $data_bayar['id_transaksi'] ?>">
                                                <td>
                                                    <?php echo $data_bayar["tgl_transaksi"]; ?></td>
                                                    <td><?php echo $data_bayar["id_meja"] ?></td>
                                                
                                                <!-- <td><?php echo $data_bayar["nomor_meja"] ?></td> -->
                                                <td><?php echo $data_bayar["nama_pelanggan"] ?></td>
                                                <td><?php echo $data_bayar["status"] ?></td>
                                                <td>
                                                    ‎ ‎ ‎ ‎ ‎ ‎ ‎
                                                    <a href="proses-bayar.php?id_transaksi=<?= $data_bayar['id_transaksi'] ?>" class="btn btn-primary" onclick="return confirm('are you sure you want to pay this?')">Pay</a>
                                                </td>
                                                <td>
                                                    ‎ ‎ ‎ ‎ ‎ ‎ ‎
                                                    <a href="hapus_transaksi.php?id_transaksi=<?= $data_bayar['id_transaksi'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                                                    ‎ ‎ ‎
                                                    <!-- <a href="ubah_transaksi.php?id_transaksi=<?= $data_bayar['id_transaksi'] ?>" class="btn btn-secondary" onclick="return confirm('apakah anda yakin mengubah data ini?')">Edit</a> -->
                                                </td>
                                                <!-- <td>
                  ‎ ‎ ‎ ‎ ‎ ‎ ‎ 
                      <a href="proses-bayar.php?id_transaksi=<?= $data_bayar['id_transaksi'] ?>" class="btn btn-primary" onclick="return confirm('apakah anda yakin membayar data ini?')">Bayar</a>
                  </td> -->
                                                <!-- <td>
                  ‎ ‎ ‎ ‎ ‎ ‎ ‎ 
                      <a href="status_transaksi.php?id_transaksi=<?= $data_bayar['id_transaksi'] ?>" class="btn btn-primary" onclick="return confirm('apakah anda yakin membayar data ini?')">Belum Bayar</a>
                  </td>  -->
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <br>
                                </table>
                                <br>
                                <a href="meja.php" class="btn btn-outline">change Table</a>
                            </a>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
                            </div>
                        </div>
</body>
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