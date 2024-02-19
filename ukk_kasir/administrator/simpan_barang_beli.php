<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$produk_id = $_POST['produk_id'];
$detail_id = $_POST['detail_id'];
$pelanggan_id = $_POST['pelanggan_id'];


//menginput data
mysqli_query($koneksi,"update detail_penjualan set produk_id='$produk_id' where detail_id='$detail_id'");

//mengalihkan
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");

?>