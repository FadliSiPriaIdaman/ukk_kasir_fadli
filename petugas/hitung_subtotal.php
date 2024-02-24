<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$Stok = $_POST['Stok'];
$produkID = $_POST['produkID'];
$JumlahProduk = $_POST['JumlahProduk'];
$Harga = $_POST['Harga'];
$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];
$Subtotal = $JumlahProduk * $Harga;
$Stok_total = $Stok - $JumlahProduk;
 
// menginput data ke database
mysqli_query($koneksi,"update detailpenjualan set Subtotal='$Subtotal', JumlahProduk='$JumlahProduk' where DetailID='$DetailID'");
mysqli_query($koneksi,"update produk set Stok='$Stok_total' where produkID='$produkID'");
 
// mengalihkan halaman kembali ke detail_pembelian.php
header("location:detail_pembelian.php?PelangganID=$PelangganID");
?>