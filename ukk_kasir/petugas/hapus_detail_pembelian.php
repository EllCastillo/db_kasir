<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$detail_id = $_POST['detail_id'];
$pelanggan_id = $_POST['pelanggan_id'];

//menginput data
mysqli_query($koneksi, "DELETE FROM detail_penjualan WHERE detail_id='$detail_id'");

//mengalihkan
header("location: detail_pembelian.php?pelanggan_id=$pelanggan_id");

?>