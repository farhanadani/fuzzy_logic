<?php
//session
session_start();
require 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>FUZZY LOGIC</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
        .responsive {
            width: 100%;
            height: 0;
            padding-bottom: 50%;
            position: absolute;
        }

        .responsive iframe {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>


</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-2">FUZZY LOGIC</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Filter tanggal -->

                        &nbsp;&nbsp;
                        <div>
                            <a href="input_variabel.php" class="btn btn-primary ">Back</a><br><br>
                        </div>
                    </div>
                    <div>
                        <h1 class="h3 mb-0 text-gray-800">Studi Kasus : Hasil Produksi Kemasan Makanan </h1>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Berapa kemasan yang harus di produksi jika permintaan 4000 dan persediaan masih 300 ?</h1>
                    </div>

                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 col-lg-7">
                                    <!-- test chart -->
                                    <!-- Fuzzy Init -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [0] Fuzzy Init
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="fuzzy_init.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fuzzifikasi -->
                                    <br><br>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [1] Fuzzifikasi
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="Fuzzifikasi.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Implikasi -->
                                    <br><br>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [2] Operasi Fuzzy
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="implikasi.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Implikasi -->
                                    <br><br>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [3] Implikasi
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="press.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Komposisi Aturan -->
                                    <br><br>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [4] Komposisi Aturan
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="press.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Defuzzifikasi -->
                                    <br><br>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [4] Defuzifikasi
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="press.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Centroid -->
                                    <br><br>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                [5] Centroid
                                            </h6>
                                        </div>
                                        <div class="card-body mb-5">
                                            <div class="chart-area mb-5">
                                                <div class="responsive"><iframe src="press.php" frameborder="0"></iframe></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end test chart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->

</body>

</html>