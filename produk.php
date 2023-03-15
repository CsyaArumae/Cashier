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
    // '".$_GET['id_produk']."'
    // $tampilan_isi = "select * from menu where id_menu = 9";
    $qry_detail_menu = mysqli_query($koneksi, "select * from menu where id_menu = "  . $_GET['id']);
    $data_menu = mysqli_fetch_array($qry_detail_menu);

    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <?php
        include "navbar_top.php";
        ?>
        <div class="container-fluid">
            <div class="page-header min-height-100 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <!-- <span class="mask bg-gradient-primary opacity-6"></span> -->
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
                                Euphoria Cafe Menu ♡
                            </h3>
                            <p class="mb-0 font-weight-light text-sm">
                                All deals in one place! Great discount on your favorites on our menu!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <main class="container">
            <section class="py-5 text-center container">
                
            </section>

            <div class="card mb-3" style="max-width: 100%;">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./foto/<?= $data_menu['foto'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <form action="proses_insert.php?id_menu=<?php echo $data_menu['id_menu'] ?>" method="post">
                                <input type="hidden" name="id_menu" value="<?= $data_menu['id_menu'] ?>">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <td>Menu</td>
                                            <td><?= $data_menu['nama_menu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td><?= $data_menu['deskripsi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td><?= $data_menu['harga'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Qty</td>
                                            <td><input type="number" name="jumlah_menu"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" class="btn btn-primary" value="Check Out"></td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
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