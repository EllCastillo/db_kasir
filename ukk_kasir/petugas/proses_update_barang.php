<?php
include '../koneksi.php';

//menangkap data
$produk_id = $_POST['produk_id'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

//update
mysqli_query($koneksi,"update produk set nama_produk='$nama_produk',harga='$harga',stok='$stok' where produk_id='$produk_id'");

//mengalihkan
header("location:data_barang.php?pesan=update")

?>