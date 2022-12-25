
<?php
    date_default_timezone_set("Asia/Jakarta");
    $server = "localhost";
    $user ="root";
    $pass ="";
    $database ="db_psnkebumen";

    $con =mysqli_connect($server,$user,$pass,$database);
    if(!$con){
        die("<script>alert('Connection failed..')</script>");
    }


    
?>
