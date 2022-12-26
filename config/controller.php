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

    // fungsi tambah data
    function tambah_data($post) {
        global $conn;

        $tanggal = $post['tanggal'];
        $no_rt = $post['no_rt'];
        $jml_rmh_diperiksa = $post['jml_rmh_diperiksa'];
        $jml_rmh_pstf = $post['jml_rmh_pstf'];
        $jml_bak = $post['jml_bak'];
        $jml_bak_ptf = $post['jml_bak_ptf'];
        $jml_tandon = $post['jml_tandon'];
        $jml_tandon_pstf = $post['jml_tandon_pstf'];
        $jml_tmpyn = $post['jml_tmpyn'];
        $jml_tmpyn_pstf = $post['jml_tmpyn_pstf'];
        $jml_btl = $post['jml_btl'];
        $jml_btl_pstf = $post['jml_btl_pstf'];
        $jml_brg_bks = $post['jml_brg_bks'];
        $jml_brg_bks_pstf = $post['jml_brg_bks_pstf'];
        $jml_kulkas = $post['jml_kuklas'];
        $jml_kulkas_pstf = $post['jml_kulkas_pstf'];
        $jml_vas = $post['jml_vas'];
        $jml_vas_pstf = $post['jml_vas_pstf'];
        $jml_pot = $post['jml_pot'];
        $jml_pot_pstf = $post['jml_pot_pstf'];
        $jml_dispen = $post['jml_dispen'];
        $jml_dispen_pstf = $post['jml_dispen_pstf'];
        $jml_lain = $post['jml_lain'];
        $jml_lain_pstf = $post['jml_lain_pstf'];

        // query tambah data
        $query = "INSERT INTO data_rt VALUES(null, '$tanggal', '$no_rt', '$jml_rmh_diperiksa', '$jml_rmh_pstf', '$jml_bak', '$jml_bak_ptf', '$jml_tandon', '$jml_tandon_pstf', '$jml_tmpyn', '$jml_tmpyn_pstf', '$jml_btl', '$jml_btl_pstf', '$jml_brg_bks', '$jml_brg_bks_pstf', '$jml_kulkas', '$jml_kulkas_pstf', '$jml_vas', '$jml_vas_pstf', '$jml_pot', '$jml_pot_pstf', '$jml_lain', '$jml_lain_pstf', '$jml_dispen', '$jml_dispen_pstf')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>