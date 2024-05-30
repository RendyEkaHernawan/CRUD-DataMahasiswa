<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_universitas";
    
    $connection =
    mysqli_connect($server,$username,$password,$database);
    if(!$connection){
        die("Koneksi Gagal : ".mysqli_connect_error());
    }else{
        echo "";
    }
?>