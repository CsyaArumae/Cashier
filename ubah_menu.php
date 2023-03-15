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
        Ubah
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
        <?php
        $qry_get_menu = mysqli_query($koneksi, "SELECT * FROM menu where 
    id_menu = '" . $_GET['id_menu'] . "'");
        $data_menu = mysqli_fetch_array($qry_get_menu);
        ?>
        <div class="container">
            <div class="card" style="margin: 20px;">
                <div class="card-header">
                    Ubah Menu</h1>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_menu.php?id=<?php echo $_GET['id_menu']?>" method="POST">
                        <input type="hidden" name="id_menu" value="<?= $data_menu['id_menu'] ?>">
                        <div class="mb-2">
                            <label class="form-label">
                                <!-- ID : </label>
        <input type="text" name="id_menu" value=   "<?= $data_menu['id_menu'] ?>" class="form-control"required> -->
                        </div>
                        Nama Menu :
                        <input type="text" name="nama_menu" value="<?= $data_menu['nama_menu'] ?>" class="form-control">
                        Deskripsi:
                        <input type="text" name="deskripsi" value="<?= $data_menu['deskripsi'] ?>" class="form-control">
                        Harga :
                        <input type="text" name="harga" value="<?= $data_menu['harga'] ?>" class="form-control">
                        <br>
                        <div class="mb-2">
                            <input type="submit" name="simpan" value="Done" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>