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
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include "navbar.php"; ?>
        </div>    
        <div id="layoutSidenav_content">
            <main>
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
                                Euphoria Food & Beverage ♡
                            </h3>
                            <p class="mb-0 font-weight-light text-sm">
                                All deals in one place! Great discount on your favorites on our menu!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="album py-5 bg-gradient-outline ">
    <div class="container text-center">
        <div class="row row-cols-sm-2 row-cols-md-3">
            <?php
            include "koneksi.php";
            if (isset($_POST['cari'])) {
                $cari = $_POST['cari'];
                $query_menu = mysqli_query($koneksi, "select * from menu= where id_menu = '$cari' or nama_menu like '%$cari%'");
            } else {
                $query_menu = mysqli_query($koneksi, "select * from menu");
            }
            while($data_menu = mysqli_fetch_array($query_menu)){
            ?>  
            <div class="col">
                <div class="card shadow-sm">
                    <img src="./foto/<?=$data_menu['foto']?>" class="bd-placeholder-img card-img-top" width="10px" height="250px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"/></img> 
                    <div class="card-body">
                        <p class="card-text"><b><?=$data_menu['nama_menu']?></b></p>
                        <p class="card-text"><?=$data_menu['deskripsi']?></p>
                        
                        <form action="proses_insert.php?" method="POST">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="produk.php?id=<?php echo $data_menu['id_menu'];?>"<button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"></button>+</a>
                                </div>
                                <p class="card-text text-muted"><b>Rp. <?=$data_menu['harga']?>,00.</b></p>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            }
                    include "footer.php";
                    ?>
        </div> <!-- Close row-cols-sm-2 row-cols-md-3 container -->
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
