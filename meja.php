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
        Tampilan
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
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h3>Table Number</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Table Number</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                                        </tr>
                                        <!-- </thead>
        <div class="container">
        <div class="card">
            <div class="card-header">
                <h1> meja</h1>
                <hr>
            </div>
            <div class="card-body">
                <form action=" meja.php" method="POST">
                    <input type="text" name="cari" class="form-control" placeholder="Search" />
                </form>
                <div class="card-body">
            <table class="table table-bordered"> 
            <thead>
                <br>
                <a href="tambah_meja.php" class="btn btn-dark">Add New meja</a>
                <br></br>
                <thead>
                    <tr>
                        <th scope="col">meja</th>
                        <th scope="col">status</th>
                        <th scope="col">action</th>
                        <th scope="col">action</th>
                    </tr>
                </thead> -->
                                    <tbody>
                                        <?php
                                        include "koneksi.php";
                                        if (isset($_POST["cari"])) {
                                            //jika ada keyword pencarian
                                            $cari = $_POST['cari'];
                                            $query_meja = mysqli_query($koneksi, "select * from meja where meja.nomor_meja.nama like '%$cari%'");
                                        } else {
                                            //jika tidak ada keyword pencarian
                                            $query_meja = mysqli_query($koneksi, "select * from meja");
                                        }
                                        while ($data_meja = mysqli_fetch_array($query_meja)) { ?>
                                            <tr>
                                                <td><?php echo $data_meja["nomor_meja"]; ?></td>
                                                <td><?php echo $data_meja["status_meja"]; ?></td>
                                                <td>
                                                    ‎ ‎ ‎ ‎ ‎ ‎ ‎
                                                    <!-- <i <a href="proses_meja.php?id_meja=<?= $data_meja['id_meja'] ?>" onclick="return confirm('apakah anda yakin mengubah data ini?')" class="outline-danger">delete</a> -->
                                                    <a href="proses_meja.php?id_meja=<?= $data_meja['id_meja'] ?>" onclick="return confirm('apakah anda yakin mengubah data ini?')" <span class="ms-1">done❥</span></a>
                                                </td>
                                                <td>
                                                    <!-- <a href="ubah_meja.php?id_meja=<?= $data_meja['id_meja'] ?>" class="btn btn-secondary">Ubah</a> -->
                                                    <a href="hapus_meja.php?id_meja=<?= $data_meja['id_meja'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="outline-danger">delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        
                                        
                                        </div>

                                    </tbody>
                                </table>
    </main>
    </body>
