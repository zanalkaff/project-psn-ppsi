<?php
    include 'config/app.php';

    $id =(int)$_GET['id'];


    if(delete_data($id)>0) {
            echo "<script>
                    alert('Data baru berhasil dihapus');
                    document.location.href = 'table-datatable-rt.php';
                </script>";
        }else {
            echo "<script>
                alert('Data gagal dihapus');
                document.location.href = 'form-input-rt.php';
            </script>";
    }
    