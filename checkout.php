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
        Soft UI Dashboard by Creative Tim
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
                                More food more smile !!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br></br>
        <div class="container">
            <div class="card border-primary mb-3">
                <div class="card-header">
                    <h1> Cart List</h1>
                </div>
                <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                if (@$_SESSION['keranjang'] == null) {
                                    echo "Empty :((";
                                    echo "<hr>";
                                } else {
                                    // echo count(@$_SESSION['keranjang'])
                                ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Menu</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach (@$_SESSION['keranjang'] as $key => $value) : ?>
                                                <tr>
                                                    <td><?= ($key + 1) ?></td>
                                                    <td><?= $value['nama_menu'] ?></td>
                                                    <td><?= $value['qty'] ?></td>
                                                    <td><?= $value['harga'] ?></td> 
                                                    <!-- <td><?= $value['id_menu'] ?></td> -->
                                                    <td><a href="hapus_keranjang.php?id=<?= $key ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this data?')">Delete</a></td>
                                                    <!-- <td><a href="edit_keranjang.php?id=<?= $key ?>" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin mengganti list ini dari keranjang?')">Edits</a></td> -->
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                   
                    <br>
                    <a href="menu_makanan.php" type="button" class="btn btn-outline">Add Another Menu</a>
                    <br>
                                    <a href="pembayaran.php" type="button" class="btn btn-primary">Checkout</a>
                                <?php } ?>
                            </div>
                        </div>
            </div>
        </div>
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