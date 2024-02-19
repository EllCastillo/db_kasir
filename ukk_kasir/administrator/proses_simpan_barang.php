<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

//menginput data
mysqli_query($koneksi,"insert into produk values('','$nama_produk','$harga','$stok')");

//mengalihkan
header("location:data_barang.php?pesan=simpan");

?>