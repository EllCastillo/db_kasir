<?php
include '../koneksi.php';

$produk_id = $_POST['produk_id'];

mysqli_query($koneksi,"delete from produk where produk_id='$produk_id'");

header("location:data_barang.php?pesan=hapus")

?>