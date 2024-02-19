<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$total_harga = $_POST['total_harga'];
$penjualan_id = $_POST['penjualan_id'];
$pelanggan_id = $_POST['pelanggan_id'];

//menginput data
mysqli_query($koneksi,"update penjualan set total_harga='$total_harga' where penjualan_id='$penjualan_id'");

//mengalihkan
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");

?>