<?php 

    include 'config/app.php';

    if(isset($_POST['simpan'])) {
        if(tambah_data_1($_POST) > 0) {
            echo "<script>
                    alert('Data baru berhasil disimpan');
                    document.location.href = 'table-datatable-1.php';
                </script>";
        }else {
            echo "<script>
                alert('Data gagal disimpan');
                document.location.href = 'form-input-1.php';
            </script>";
        }
    }

?>




<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Logo1.png">
    <title>M-PSN Desa Kebumen</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
   
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="dasboard.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="assets/images/psnlogo.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="dasboard.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Pendataan</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-plus" class="feather-icon"></i><span
                                    class="hide-menu">Input Data PSN </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="form-input-1.php" class="sidebar-link"><span
                                            class="hide-menu"> Input Form 1
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-input-2.php" class="sidebar-link"><span
                                            class="hide-menu"> Input Form 2
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                class="hide-menu">Data PSN </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="table-datatable-1.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Form 1
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-datatable-2.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Form 2
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Pengelolaan Data</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="printer" class="feather-icon"></i><span
                                    class="hide-menu">Cetak Data
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"><a href="print-data-1.php" class="sidebar-link"><span
                                            class="hide-menu"> Cetak Form 1 </span></a></li>

                                <li class="sidebar-item"><a href="print-data-2.php" class="sidebar-link"><span
                                            class="hide-menu"> Cetak Form 2 </span></a></li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Input Data PSN</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Input Form 1</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tanggal Input</h4>
                                    <div class="form-group">
                                        <input type="date" class="form-control" required name="tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kelurahan/Desa</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="kelurahan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nama Dawis</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="nama_dawis">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">No RT</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="no_rt">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">No RW</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="no_rw">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nama KK</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="nama_kk">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Bak</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_bak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Bak Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_bak_pstf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tandon</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tandon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tandon Positif</h4>    
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tandon_pstf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tempayan</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tmpyn">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tempayan Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tmpyn_pstf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Botol</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_btl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Botol Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_btl_pstf">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Barang Bekas</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_brg_bks">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Barang Bekas Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_brg_bks_pstf">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Kulkas</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_kulkas">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Kulkas Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_kulkas_pstf">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Vas</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_vas">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Vas Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_vas_pstf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Pot</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_pot">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Pot Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_pot_pstf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Lain-lain</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_lain">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Lain-lain Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_lain_pstf" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-36 col-md-6 col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved. Designed and Developed by <a
                    href="#">Bawor Group</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <div class="chat-windows "></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- apps -->
    <script src="dist/js/app.min.js "></script>
    <script src="dist/js/app.init-menusidebar.js"></script>
    <script src="dist/js/app-style-switcher.js "></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js "></script>
    <script src="assets/extra-libs/sparkline/sparkline.js "></script>
    <!-- theme js -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js "></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js "></script>
</body>

</html>