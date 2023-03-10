<?php 

    session_start();

    include 'config/app.php';

    if(!isset($_SESSION['session_email'])) {
        header('location:index.php');
        exit();
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
    <!-- yt -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <!-- end ty -->
   
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
                                            class="hide-menu"> Input Data Dawis
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-input-2.php" class="sidebar-link"><span
                                            class="hide-menu"> Input Data RT
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                class="hide-menu">Data PSN </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="table-datatable-1.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Dawis
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-datatable-2.php" class="sidebar-link"><span
                                            class="hide-menu"> Data RT
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
                                            class="hide-menu"> Cetak Data Dawis </span></a></li>

                                <li class="sidebar-item"><a href="print-data-2.php" class="sidebar-link"><span
                                            class="hide-menu"> Cetak Data RT </span></a></li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="logout.php"
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Cetak Data PSN</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Cetak Data Dawis</li>
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
                <div class="table-responsive">
                    <table id="printRT" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal</th>
                                                <th>Kabupaten</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Jumlah Rumah</th>
                                                <th>No RT</th>
                                                <th>Nama Dawis</th>
                                                <th>Rumah Diperiksa</th>
                                                <th>Rumah Positif</th>
                                                <th>Bak</th>
                                                <th>Bak Positif</th>
                                                <th>Tempayan</th>
                                                <th>Tempayan Positif</th>
                                                <th>Botol</th>
                                                <th>Botol Positif</th>
                                                <th>Barang Bekas</th>
                                                <th>Barang Bekas Positif</th>
                                                <th>Kulkas</th>
                                                <th>Kulkas Positif</th>
                                                <th>Tandon</th>
                                                <th>Tandon Positif</th>
                                                <th>Vas</th>
                                                <th>Vas Positif</th>
                                                <th>Pot</th>
                                                <th>Pot Positif</th>
                                                <th>Lain-lain</th>
                                                <th>Lain-lain Positif</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        $no =1;
                                        $tampil =mysqli_query($conn, "SELECT * FROM form_2 ORDER BY id ASC");
                                        while($data = mysqli_fetch_array($tampil)):

                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?=$data["tanggal"]?></td>
                                                <td><?=$data["kabupaten"]?></td>
                                                <td><?=$data["kecamatan"]?></td>
                                                <td><?=$data["kelurahan"]?></td>
                                                <td><?=$data["jml_rumah"]?></td>
                                                <td><?=$data["no_rt"]?></td>
                                                <td><?=$data["nama_dawis"]?></td>
                                                <td><?=$data["jml_rmh_diperiksa"]?></td>
                                                <td><?=$data["jml_rmh_pstf"]?></td>
                                                <td><?=$data["jml_bak"]?></td>
                                                <td><?=$data["jml_bak_pstf"]?></td>
                                                <td><?=$data["jml_tmpyn"]?></td>
                                                <td><?=$data["jml_tmpyn_pstf"]?></td>
                                                <td><?=$data["jml_btl"]?></td>
                                                <td><?=$data["jml_btl_pstf"]?></td>
                                                <td><?=$data["jml_brg_bks"]?></td>
                                                <td><?=$data["jml_brg_bks_pstf"]?></td>
                                                <td><?=$data["jml_kulkas"]?></td>
                                                <td><?=$data["jml_kulkas_pstf"]?></td>
                                                <td><?=$data["jml_tandon"]?></td>
                                                <td><?=$data["jml_tandon_pstf"]?></td>
                                                <td><?=$data["jml_vas"]?></td>
                                                <td><?=$data["jml_vas_pstf"]?></td>
                                                <td><?=$data["jml_pot"]?></td>
                                                <td><?=$data["jml_pot_pstf"]?></td>
                                                <td><?=$data["jml_lain"]?></td>
                                                <td><?=$data["jml_lain_pstf"]?></td>
                                            </tr>
                                            <?php endwhile; ?>                                      
                                        </tbody>                                      
                    </table>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
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
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <!-- yt -->
    <script>
    $(document).ready(function() {
        $('#printRT').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'csv','excel'
            ]
        } );
    } );

    </script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <!-- end yt -->
</body>

</html>