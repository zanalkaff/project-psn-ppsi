<?php

    include "config/app.php";

    session_start();
    if(isset($_SESSION['nama'])){
        header("location:dasboard.php");
    }

    if (isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $email =  $_POST["email"];
        $password = $_POST["password"];
        
        if($password){
            $sql="SELECT *FROM admin_form where email='$email'";
            $result =mysqli_query($conn,$sql);
            if(!$result-> num_rows >0){
            $sql = "INSERT INTO admin_form (nama,email,password)
                        values ('$nama','$email','$password')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<script> alert('user regis complete')</script>";
                    $nama ="";
                    $email ="";
                    $_POST['password']="";
                }  else{
                    echo "<script> alert('user regis failed')</script>";
                }
            }else{
                echo "<script> alert('email already')</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html dir="ltr">

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   
</head>

<body>
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background-image: url(assets/images/background/kebumen.jpg); background-size: cover;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/images/big/logoback2.png);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Daftar</h2>
                        <form class="mt-4" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="masukkan nama" name="nama">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="masukkan email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="password" name="password">
                                    </div>
                               
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-primary" name="submit">Daftar</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Sudah Memiliki Akun? <a href="index.php" class="text-danger">Masuk</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>