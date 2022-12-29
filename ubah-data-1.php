<?php 

    include 'config/app.php';

    $id =(int)$_GET['id'];
    $data =select ("SELECT*FROM form_1 WHERE id =$id")[0];


    if(isset($_POST['ubah'])) {
        if(update_data_1($_POST) > 0) {
            echo "<script>
                    alert('Data baru berhasil diubah');
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
    <title>M-PSN.com</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
   
</head>


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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form 1 PSN Ubah Data</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Ubah Form 1</li>
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
                    <input type = "text" name = "id" value ="<?=$data['id']?>">
                    <div class="row">
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tanggal Input</h4>
                                    <div class="form-group">
                                        <input type="date" class="form-control" required name="tanggal" value ="<?=$data['tanggal']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tanggal Input</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="kelurahan" value ="<?=$data['kelurahan']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nama Dawis</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="nama_dawis" value ="<?=$data['nama_dawis']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">No RT</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="no_rt" value ="<?=$data['no_rt']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">No RW</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="no_rw" value ="<?=$data['no_rw']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nama KK</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="nama_kk" value ="<?=$data['nama_kk']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Bak</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_bak" value ="<?=$data['jml_bak']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Bak Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_bak_pstf" value ="<?=$data['jml_bak_pstf']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tandon</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tandon" value ="<?=$data['jml_tandon']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tandon Positif</h4>    
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tandon_pstf" value ="<?=$data['jml_tandon_pstf']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tempayan</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tmpyn" value ="<?=$data['jml_tmpyn']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Tempayan Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_tmpyn_pstf" value ="<?=$data['jml_tmpyn_pstf']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Botol</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_btl" value ="<?=$data['jml_btl']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Botol Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_btl_pstf" value ="<?=$data['jml_btl_pstf']?>">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Barang Bekas</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_brg_bks" value ="<?=$data['jml_brg_bks']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Barang Bekas Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_brg_bks_pstf" value ="<?=$data['jml_brg_bks_pstf']?>">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Kulkas</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_kulkas" value ="<?=$data['jml_kulkas']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Kulkas Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_kulkas_pstf" value ="<?=$data['jml_kulkas_pstf']?>">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Vas</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_vas" value ="<?=$data['jml_vas']?>">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Vas Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_vas_pstf" value ="<?=$data['jml_vas_pstf']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Pot</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_pot" value ="<?=$data['jml_pot']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Pot Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_pot_pstf" value ="<?=$data['jml_pot_pstf']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Lain-lain</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_lain" value ="<?=$data['jml_lain']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Lain-lain Positif</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="jml_lain_pstf" value ="<?=$data['jml_lain_pstf']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-36 col-md-6 col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="ubah">Simpan</button>
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