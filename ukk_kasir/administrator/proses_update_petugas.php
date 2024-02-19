<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

//menginput data 
if (!$password) {
    mysqli_query($koneksi,"UPDATE petugas set nama_petugas='$nama_petugas', username='$username', level='$level' where id_petugas='$id_petugas'");
} else {
    mysqli_query($koneksi,"UPDATE petugas set nama_petugas='$nama_petugas', username='$username', password='$password', level='$level' where id_petugas='$id_petugas'");
}
//mengalihkan
header("location:data_pengguna.php?pesan=update");

?>