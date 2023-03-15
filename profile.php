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
    <?php
    $query_profil = mysqli_query($koneksi, "SELECT * FROM user 
        where id_user = '".$_SESSION['id_user']."'");
        $data_user=mysqli_fetch_array($query_profil);
        ?>
    <div class="container-fluid">
                        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('./foto/curved0.jpg'); background-position-y: 50%;">
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
                                            Euphoria Cashier Profile ♡
                                        </h3>
                                        <p class="mb-0 font-weight-light text-sm">
                                            Hello! Have a Nice Day 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        <main class="container"> 
            <br><br><br>
            <div class="container">
            <div class="card border-primary mb-3">
                <div class="card-header">
                <form action=""><input type="hidden" name="id_user" value="<?=$data_user['id_user']?>"></form>
                <table class="table table-hover table-striped mb-4">
                    <thead style="text-align: left;">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?=$data_user["nama_user"]?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?=$data_user["username"]?></td>
                    </tr>
                    
                    <tr>
                        <td>Role</td>
                        <td>:</td>
                        <td><?=$data_user["role"]?>
                      </td>
                    </tr>
                    </thead>
                </table>
                <a href="home.php" class="btn btn-primary">Back Home</a>
        <!-- <a href="registrasi.php" class="btn btn-success">Registrasi</a> -->
        <div style="float: right;">
            <!-- <a href="ubah_profil.php?id_user=<?=$data_user['id_user']?>"
            class="btn btn-light">Change Account</a> -->
             <a
            href="hapus_user.php?id_user=<?=$data_user['id_user']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Delete Account</a> 
        </div>
        </section>

            </div>
        </div>
            

        
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Profile Information</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="javascript:;">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                Hi, I’m Euphoria Cashier, I really like working here because it is very exciting.
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> <?=$data_user["nama_user"]?></li>
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Username:</strong> <?=$data_user["username"]?></li>
                <li class="list-group-item border-0 ps-0 pb-0">
                  <strong class="text-dark text-sm">Social:</strong> &nbsp;
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <br>
        
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
        <script src="https://instagram.com/csyaaaa?igshid=ZDdkNTZiNTM=" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</div>

</main>
    </main>
        
                
        </main>   
        