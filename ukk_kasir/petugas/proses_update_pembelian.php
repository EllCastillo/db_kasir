<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$pelanggan_id = $_POST['pelanggan_id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

//menginput data
mysqli_query($koneksi,"update pelanggan set nama_pelanggan='$nama_pelanggan',nomor_telepon='$nomor_telepon',alamat='$alamat' where pelanggan_id='$pelanggan_id'");

//mengalihkan
header("location:pembelian.php?pesan=update");

?>