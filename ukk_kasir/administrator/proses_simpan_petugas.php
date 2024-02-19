<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

//menginput data
mysqli_query($koneksi,"insert into petugas values('','$nama_petugas','$username','$password','$level')");

//mengalihkan
header("location:data_pengguna.php?pesan=simpan");

?>