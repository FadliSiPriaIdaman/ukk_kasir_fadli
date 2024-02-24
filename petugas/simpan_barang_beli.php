<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$ProdukID = $_POST['ProdukID'];
$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];
 
// menginput data ke database
mysqli_query($koneksi,"update detailpembelian set ProdukID='$ProdukID' where DetailID='$DetailID'");
 
// mengalihkan halaman kembali ke detail_pembelian.php
header("location:detail.pembelian.php?PelangganID=$PelangganID");
?>