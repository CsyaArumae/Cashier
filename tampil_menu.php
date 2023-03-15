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
                            <h3>Data Menu</h3>
                        </div>

                        <div class="card-body">

                            <a href="tambah_menu.php" class="btn btn-primary">Add New Menu ❥</a>
                            <br></br>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Menu</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        include "koneksi.php";
                                        if (isset($_POST["cari"])) {
                                            //jika ada keyword pencarian
                                            $cari = $_POST['cari'];
                                            $query_menu = mysqli_query($koneksi, "select * from menu where menu.nama_menu.nama like '%$cari%'");
                                        } else {
                                            //jika tidak ada keyword pencarian
                                            $query_menu = mysqli_query($koneksi, "select * from menu");
                                        }
                                        while ($data_menu = mysqli_fetch_array($query_menu)) { ?>
                                            <tr>
                                                <td><?php echo $data_menu["nama_menu"]; ?></td>
                                                <td><?php echo $data_menu["deskripsi"]; ?></td>
                                                <td><?php echo $data_menu["harga"]; ?></td>

                                                <td><a href="ubah_menu.php?id_menu=<?= $data_menu['id_menu'] ?>" class="btn btn-outline">edit</a>
                                                    <!-- <a href="hapus_siswa.php?nisn=<?= $data_menu['nisn'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class=" btn btn-danger">Hapus</a> -->
                                                    <a href="hapus_menu.php?id_menu=<?= $data_menu['id_menu'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
    </main>

</body>