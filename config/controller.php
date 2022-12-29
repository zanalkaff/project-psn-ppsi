<?php 

    // fungsi menampilkan
    function select($query) {
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // fungsi tambah data 1
    function tambah_data_1($post) {
        global $conn;

        $tanggal = $post['tanggal'];
        $kelurahan = $post['kelurahan'];
        $nama_dawis = $post['nama_dawis'];
        $no_rt = $post['no_rt'];
        $no_rw = $post['no_rw'];
        $nama_kk = $post['nama_kk'];
        $jml_bak = $post['jml_bak'];
        $jml_bak_pstf = $post['jml_bak_pstf'];
        $jml_tandon = $post['jml_tandon'];
        $jml_tandon_pstf = $post['jml_tandon_pstf'];
        $jml_tmpyn = $post['jml_tmpyn'];
        $jml_tmpyn_pstf = $post['jml_tmpyn_pstf'];
        $jml_btl = $post['jml_btl'];
        $jml_btl_pstf = $post['jml_btl_pstf'];
        $jml_brg_bks = $post['jml_brg_bks'];
        $jml_brg_bks_pstf = $post['jml_brg_bks_pstf'];
        $jml_kulkas = $post['jml_kulkas'];
        $jml_kulkas_pstf = $post['jml_kulkas_pstf'];
        $jml_vas = $post['jml_vas'];
        $jml_vas_pstf = $post['jml_vas_pstf'];
        $jml_pot = $post['jml_pot'];
        $jml_pot_pstf = $post['jml_pot_pstf'];
        $jml_lain = $post['jml_lain'];
        $jml_lain_pstf = $post['jml_lain_pstf'];

        // query tambah data
        $query = "INSERT INTO form_1 VALUES(null, '$tanggal', '$kelurahan', '$nama_dawis', '$no_rt', '$no_rw', '$nama_kk', '$jml_bak', '$jml_bak_pstf', '$jml_tmpyn', '$jml_tmpyn_pstf', '$jml_btl', '$jml_btl_pstf', '$jml_brg_bks', '$jml_brg_bks_pstf', '$jml_kulkas', '$jml_kulkas_pstf', '$jml_tandon', '$jml_tandon_pstf', '$jml_vas', '$jml_vas_pstf', '$jml_pot', '$jml_pot_pstf', '$jml_lain', '$jml_lain_pstf')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi tambah data 2
    function tambah_data_2($post) {
        global $conn;

        $tanggal = $post['tanggal'];
        $kabupaten = $post['kabupaten'];
        $kecamatan = $post['kecamatan'];
        $kelurahan = $post['kelurahan'];
        $jml_rumah = $post['jml_rumah'];
        $no_rt = $post['no_rt'];
        $nama_dawis = $post['nama_dawis'];
        $jml_rmh_diperiksa = $post['jml_rmh_diperiksa'];
        $jml_rmh_pstf = $post['jml_rmh_pstf'];
        $jml_bak = $post['jml_bak'];
        $jml_bak_pstf = $post['jml_bak_pstf'];
        $jml_tandon = $post['jml_tandon'];
        $jml_tandon_pstf = $post['jml_tandon_pstf'];
        $jml_tmpyn = $post['jml_tmpyn'];
        $jml_tmpyn_pstf = $post['jml_tmpyn_pstf'];
        $jml_btl = $post['jml_btl'];
        $jml_btl_pstf = $post['jml_btl_pstf'];
        $jml_brg_bks = $post['jml_brg_bks'];
        $jml_brg_bks_pstf = $post['jml_brg_bks_pstf'];
        $jml_kulkas = $post['jml_kulkas'];
        $jml_kulkas_pstf = $post['jml_kulkas_pstf'];
        $jml_vas = $post['jml_vas'];
        $jml_vas_pstf = $post['jml_vas_pstf'];
        $jml_pot = $post['jml_pot'];
        $jml_pot_pstf = $post['jml_pot_pstf'];
        $jml_lain = $post['jml_lain'];
        $jml_lain_pstf = $post['jml_lain_pstf'];

        // query tambah data
        $query = "INSERT INTO form_2 VALUES(null, '$tanggal', '$kabupaten', '$kecamatan', '$kelurahan', '$jml_rumah', '$no_rt', '$nama_dawis', '$jml_rmh_diperiksa', '$jml_rmh_pstf', '$jml_bak', '$jml_bak_pstf', '$jml_tmpyn', '$jml_tmpyn_pstf', '$jml_btl', '$jml_btl_pstf', '$jml_brg_bks', '$jml_brg_bks_pstf', '$jml_kulkas', '$jml_kulkas_pstf',  '$jml_tandon', '$jml_tandon_pstf', '$jml_vas', '$jml_vas_pstf', '$jml_pot', '$jml_pot_pstf', '$jml_lain', '$jml_lain_pstf')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi update data 1
    function update_data_1 ($post){
        global $conn;
        
        $id = $post['id'];
        $tanggal = $post['tanggal'];
        $kelurahan = $post['kelurahan'];
        $nama_dawis = $post['nama_dawis'];
        $no_rt = $post['no_rt'];
        $no_rw = $post['no_rw'];
        $nama_kk = $post['nama_kk'];
        $jml_bak = $post['jml_bak'];
        $jml_bak_pstf = $post['jml_bak_pstf'];
        $jml_tandon = $post['jml_tandon'];
        $jml_tandon_pstf = $post['jml_tandon_pstf'];
        $jml_tmpyn = $post['jml_tmpyn'];
        $jml_tmpyn_pstf = $post['jml_tmpyn_pstf'];
        $jml_btl = $post['jml_btl'];
        $jml_btl_pstf = $post['jml_btl_pstf'];
        $jml_brg_bks = $post['jml_brg_bks'];
        $jml_brg_bks_pstf = $post['jml_brg_bks_pstf'];
        $jml_kulkas = $post['jml_kulkas'];
        $jml_kulkas_pstf = $post['jml_kulkas_pstf'];
        $jml_vas = $post['jml_vas'];
        $jml_vas_pstf = $post['jml_vas_pstf'];
        $jml_pot = $post['jml_pot'];
        $jml_pot_pstf = $post['jml_pot_pstf'];
        $jml_lain = $post['jml_lain'];
        $jml_lain_pstf = $post['jml_lain_pstf'];

        $query = "UPDATE form_1 SET tanggal='$tanggal', kelurahan='$kelurahan', nama_dawis='$nama_dawis', no_rt='$no_rt', no_rw='$no_rw', nama_kk='$nama_kk', jml_bak= '$jml_bak', jml_bak_pstf='$jml_bak_pstf', jml_tmpyn='$jml_tmpyn', jml_tmpyn_pstf='$jml_tmpyn_pstf', jml_btl='$jml_btl', jml_btl_pstf='$jml_btl_pstf', jml_brg_bks='$jml_brg_bks', jml_brg_bks_pstf='$jml_brg_bks_pstf', jml_kulkas='$jml_kulkas', jml_kulkas_pstf='$jml_kulkas_pstf',jml_tandon= '$jml_tandon', jml_tandon_pstf='$jml_tandon_pstf', jml_vas='$jml_vas', jml_vas_pstf='$jml_vas_pstf', jml_pot='$jml_pot', jml_pot_pstf='$jml_pot_pstf', jml_lain='$jml_lain', jml_lain_pstf='$jml_lain_pstf' WHERE id = $id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi delete data 1
    function delete_data_1 ($id){
        global $conn;

        $query = "DELETE FROM form_1 WHERE id = $id";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi update data 2
    function update_data_2 ($post){
        global $conn;
        
        $id = $post['id'];
        $tanggal = $post['tanggal'];
        $kabupaten = $post['kabupaten'];
        $kecamatan = $post['kecamatan'];
        $kelurahan = $post['kelurahan'];
        $jml_rumah = $post['jml_rumah'];
        $no_rt = $post['no_rt'];
        $nama_dawis = $post['nama_dawis'];
        $jml_rmh_diperiksa = $post['jml_rmh_diperiksa'];
        $jml_rmh_pstf = $post['jml_rmh_pstf'];
        $jml_bak = $post['jml_bak'];
        $jml_bak_pstf = $post['jml_bak_pstf'];
        $jml_tandon = $post['jml_tandon'];
        $jml_tandon_pstf = $post['jml_tandon_pstf'];
        $jml_tmpyn = $post['jml_tmpyn'];
        $jml_tmpyn_pstf = $post['jml_tmpyn_pstf'];
        $jml_btl = $post['jml_btl'];
        $jml_btl_pstf = $post['jml_btl_pstf'];
        $jml_brg_bks = $post['jml_brg_bks'];
        $jml_brg_bks_pstf = $post['jml_brg_bks_pstf'];
        $jml_kulkas = $post['jml_kulkas'];
        $jml_kulkas_pstf = $post['jml_kulkas_pstf'];
        $jml_vas = $post['jml_vas'];
        $jml_vas_pstf = $post['jml_vas_pstf'];
        $jml_pot = $post['jml_pot'];
        $jml_pot_pstf = $post['jml_pot_pstf'];
        $jml_lain = $post['jml_lain'];
        $jml_lain_pstf = $post['jml_lain_pstf'];

        $query = "UPDATE form_2 SET tanggal='$tanggal', kabupaten='$kabupaten', kecamatan='$kecamatan', kelurahan='$kelurahan', jml_rumah='$jml_rumah', no_rt='$no_rt', nama_dawis='$nama_dawis', jml_rmh_diperiksa='$jml_rmh_diperiksa', jml_rmh_pstf='$jml_rmh_pstf',jml_bak= '$jml_bak',jml_bak_pstf= '$jml_bak_pstf', jml_tmpyn='$jml_tmpyn', jml_tmpyn_pstf='$jml_tmpyn_pstf', jml_btl='$jml_btl', jml_btl_pstf='$jml_btl_pstf', jml_brg_bks='$jml_brg_bks', jml_brg_bks_pstf='$jml_brg_bks_pstf', jml_kulkas='$jml_kulkas', jml_kulkas_pstf='$jml_kulkas_pstf',jml_tandon= '$jml_tandon', jml_tandon_pstf='$jml_tandon_pstf', jml_vas='$jml_vas', jml_vas_pstf='$jml_vas_pstf', jml_pot='$jml_pot', jml_pot_pstf='$jml_pot_pstf', jml_lain='$jml_lain', jml_lain_pstf='$jml_lain_pstf' WHERE id = $id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi delete data 2
    function delete_data_2 ($id){
        global $conn;

        $query = "DELETE FROM form_2 WHERE id = $id";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>