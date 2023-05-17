<?php
include('koneksi.php');

$tgl_msk = $_GET['tgl_masuk'];
$jumlah = $_GET['jumlah'];
$keterangan = $_GET['ket'];

//update query
$query = mysqli_query($koneksi,"INSERT INTO `pemasukkan` (`tgl_masuk`, `jumlah`, `ket`) VALUES ('$tgl_pemasukkan', '$jumlah', '$keterangan')");

if ($query) {
 header("location:pendapatan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}
?>