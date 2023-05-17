<?php

$hostname = "localhost";
$userDataBase = "root";
$passwordDataBase = "";
$database = "catatan_ung";

$koneksi = mysqli_connect($hostname, $userDataBase, $passwordDataBase, $database) or die (mysqli_error());

    //if($koneksi){
    // echo "berhasil koneksi";
    //} else echo "gagal koneksi";
?>