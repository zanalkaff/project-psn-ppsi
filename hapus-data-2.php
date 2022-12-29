<?php
    include 'config/app.php';

    $id =(int)$_GET['id'];


    if(delete_data_2($id)>0) {
            echo "<script>
                    alert('Data baru berhasil dihapus');
                    document.location.href = 'table-datatable-2.php';
                </script>";
        }else {
            echo "<script>
                alert('Data gagal dihapus');
                document.location.href = 'form-input-2.php';
            </script>";
    }
    