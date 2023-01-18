<?php
    session_start();
    
    include 'config/app.php';

    if(!isset($_SESSION['session_email'])) {
        header('location:index.php');
        exit();
    }

    $id =(int)$_GET['id'];


    if(delete_data_1($id)>0) {
            echo "<script>
                    alert('Data baru berhasil dihapus');
                    document.location.href = 'table-datatable-1.php';
                </script>";
        }else {
            echo "<script>
                alert('Data gagal dihapus');
                document.location.href = 'form-input-1.php';
            </script>";
    }
    