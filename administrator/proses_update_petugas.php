<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if (!$password) {
    // update data ke database
mysqli_query($koneksi,"update petugas set nama_petugas='$nama_petugas', username='$username', level='$level' where id_petugas='$id_petugas'");
} else {
    // update data ke database
mysqli_query($koneksi,"update petugas set nama_petugas='$nama_petugas', username='$username', password='$password', level='$level' where id_petugas='$id_petugas'");
}

// mengalihkan halaman kembali ke data_pengguna.php
header("location:data_pengguna.php?pesan=update");
?>