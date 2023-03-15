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
                        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
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
                                            Euphoria Cafe Menu ♡
                                        </h3>
                                        <p class="mb-0 font-weight-light text-sm">
                                            All deals in one place! Great discount on your favorites on our menu!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br></br>
                        <div class="card border-dark mb-3">
                            <div class="card-header">

                                <main>

                                    <section class="container text-center">
                                        <div class="col-lg-6 col-md-8 mx-auto">
                                            <h1 class="fw-light"></h1>
                                            <!-- <p class="lead text-muted">All deals in one place! Great discount on your favorites on our menu!</p> -->
                                            <form method="POST" action="menu_makanan.php" class="d-flex">
                                                <form action="transaksi.php" method="POST">
                                                    <!-- <input type = "text" name = "cari" class = "form-control" placeholder = "find here"/> -->
                                                </form>
                                                <br>
                                                <!-- <a class= "btn btn-lg btn-primary" href="menu_pembuka.php" role="button">Appetizer</a> -->
                                                <h5 class="mb-1"> 𝐟𝐢𝐧𝐝 𝐲𝐨𝐮𝐫 𝐟𝐚𝐯'𝐬 𝐦𝐞𝐧𝐮 𝐡𝐞𝐫𝐞  </h5>
                                                <!-- <h6 class="mb-1">⇘          ⇙ </h6> -->
                                                
                                                <a class="btn bg-gradient-primary mt-3 w-100" href="menu_makanan.php" role="button">Food and Beverages</a>
                                                <!-- <a class= "btn btn-lg btn-primary" href="menu_manis.php" role="button">Dessert</a> -->
                                                <!-- <a class= "btn btn-lg btn-primary" href="menu_minuman.php" role="button">Drink</a> -->
                                                <br>
                                                <br>
                                                <hr>
                                                </hr>
                                                <br>
                                                <br>
</div>
                                                <div class="col-12 mt-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header pb-0 p-3">
                                                            <h6 class="mb-1">𝐆𝐫𝐞𝐚𝐭 𝐃𝐞𝐚𝐥𝐬 𝐅𝐨𝐫 𝐓𝐨𝐝𝐚𝐲 !</h6>
                                                            <p class="text-sm">Discount Up To 25% </p>
                                                        </div>
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                                    <div class="card card-blog card-plain">
                                                                        <div class="position-relative">
                                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                                <img src="./foto/Flavorful-Salmon-Fillets_EXPS_CF2BZ20_32394_B12_05_4b.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                            </a>
                                                                        </div>
                                                                        <div class="card-body px-1 pb-0">
                                                                            <p class="text-gradient text-dark mb-2 text-sm">Buy 2 Free 2 Tea !</p>
                                                                            <a href="javascript:;">
                                                                                <h5>
                                                                                    Grill Salmon
                                                                                </h5>
                                                                            </a>
                                                                            <p class="mb-4 text-sm">
                                                                                Full-flavored fish with a very colorful flesh it has a very distinctive flavor profile
                                                                            </p>
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="produk.php?id=9" type="button" class="btn btn-outline-primary">See Detail Menu</a>
                                                                                <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button> -->
                                                                                <div class="avatar-group mt-2">
                                                                                    <!-- <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="./foto/Flavorful-Salmon-Fillets_EXPS_CF2BZ20_32394_B12_05_4b.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg"> -->
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                                    <div class="card card-blog card-plain">
                                                                        <div class="position-relative">
                                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                                <img src="./foto/20181116_Roasted-Beef-Tenderloin-with-Gremolata_RE_HE_M.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                                                            </a>
                                                                        </div>
                                                                        <div class="card-body px-1 pb-0">
                                                                            <p class="text-gradient text-dark mb-2 text-sm">Buy 2 Free 2 Affogato !</p>
                                                                            <a href="javascript:;">
                                                                                <h5>
                                                                                    Tenderloin Steak
                                                                                </h5>
                                                                            </a>
                                                                            <p class="mb-4 text-sm">
                                                                                A long, narrow, and lean muscle Tenderloin is the source of Tenderloin Steak or Filet Mignon </p>
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="produk.php?id=7" type="button" class="btn btn-outline-primary">See Detail Menu</a>
                                                                                <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button> -->
                                                                                <div class="avatar-group mt-2">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                                    <div class="card card-blog card-plain">
                                                                        <div class="position-relative">
                                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                                <img src="./foto/619---Creamy-Two-Mushroom-Risotto3757-1625502398447.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                                                            </a>
                                                                        </div>
                                                                        <div class="card-body px-1 pb-0">
                                                                            <p class="text-gradient text-dark mb-2 text-sm">Buy 3 Free 2 Tea !</p>
                                                                            <a href="javascript:;">
                                                                                <h5>
                                                                                    Creamy Mushroom
                                                                                </h5>
                                                                            </a>
                                                                            <p class="mb-4 text-sm">
                                                                                Short-grain rice, White wine, Broth, Parmesan cheese, and Butter </p>
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="produk.php?id=12" type="button" class="btn btn-outline-primary">See Detail Menu</a>
                                                                                <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button> -->
                                                                                <div class="avatar-group mt-2">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                                    <div class="card card-blog card-plain">
                                                                        <div class="position-relative">
                                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                                <img src="./foto/3301_2-All-Day-English-Breakfast-With-Chips--Beans-9361-1616494956723.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                            </a>
                                                                        </div>
                                                                        <div class="card-body px-1 pb-0">
                                                                            <p class="text-gradient text-dark mb-2 text-sm">Save 10000 !!</p>
                                                                            <a href="javascript:;">
                                                                                <h5>
                                                                                    English Breakfast
                                                                                </h5>
                                                                            </a>
                                                                            <p class="mb-4 text-sm">
                                                                                Fried eggs, sausages, back bacon, tomatoes, mushrooms, fried bread </p>
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <a href="produk.php?id=15" type="button" class="btn btn-outline-primary">See Detail Menu</a>
                                                                                <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button> -->
                                                                                <!-- <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card h-100 card-plain border">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <a href="javascript:;">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class=" text-secondary"> New project </h5>
                      </a>
                    </div>
                  </div>
                </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                            </div>
                        </div>
                        </section>
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
</div>

</main>