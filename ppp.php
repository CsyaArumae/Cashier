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
        <div class="card border-dark mb-3">
            <div class="card-header">
                <h1>History Pembelian menu</h1>
            </div>
            <div class="card-body">
            <table class="table table-dark table-stripped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Beli</th>
                    <th scope="col">Id Pelanggan</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                <?php
 include "koneksi.php";
     $query_histori=mysqli_query($koneksi,"select * from transaksi order by id_transaksi desc");
     $no=0;
    while($data_histori=mysqli_fetch_array($query_histori)){
    $no++;
 //menampilkan buku yang dipinjam
    $menu_dibeli="<ol>";
    $harga="<ul>";

 
    $query_get_menu=mysqli_query($koneksi,"select * from 
                          detail_transaksi join menu on 
                          menu.id_menu=detail_transaksi.id_menu 
                          where id_transaksi = '".$data_histori['id_transaksi']."'");

    while($data_menu=mysqli_fetch_array($query_get_menu)){
                          $menu_dibeli.="<li>".$data_menu['nama_menu']."</li>";
                          $harga.="<ul>".$data_menu['harga']."</ul>";
 }
    $menu_dibeli.="</ol>";
    $harga.="</ul>";

 ?>
 <tr>

<td><?=$no?></td><td><?=$data_histori['tgl_transaksi']?></td><td><?=$data_histori['id_pelanggan']?></td><td><?=$menu_dibeli?></td><td><?=$harga?></td>
 </tr>
                    <?php } ?>
                </tbody>
            </table>
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