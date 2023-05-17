<?php
include('koneksi.php');

$id = $_GET['id_masuk'];
$tgl = $_GET['tgl_masuk'];
$jumlah = $_GET['jumlah'];
$keterangan = $_GET['ket'];

$query = mysqli_query($koneksi,"UPDATE pemasukkan SET tgl_masuk='$tgl' , jumlah='$jumlah', ket='$keterangan' WHERE id_masuk='$id' ");

if ($query) {
 header("location:pendapatan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}
?>