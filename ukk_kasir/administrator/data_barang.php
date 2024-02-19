<?php
include '../koneksi.php';
include "header.php";
include "navbar.php";
?>
<div class="card mt-2">
    <div class="card-body">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah-data">
            Tambah Data
        </button>
    </div>
    <div class="card-body">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="simpan"){?>
            <div class="alert alert-success" role="alert">
                Data Berhasil DI Simpan
            </div>
        <?php } ?>
        <?php if($_GET['pesan']=="update"){?>
            <div class="alert alert-success" role="alert">
                Data Berhasil Di Update
            </div>
            <?php } ?>
        <?php if($_GET['pesan']=="hapus"){?>
            <div class="alert alert-success" role="alert">
                Data Berhasil Di Hapus
            </div>
            <?php } ?>
            <?php
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi,"select * from produk");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['nama_produk']; ?></td>
                        <td>Rp. <?= $d['harga']; ?></td>
                        <td><?= $d['stok']; ?></td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit-data<?= $d['produk_id'] ?>" <?= $d['produk_id']; ?>>
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus-data<?= $d['produk_id'] ?>" <?= $d['produk_id']; ?>>
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Edit Data -->
                    <div class="modal fade" id="edit-data<?= $d['produk_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="proses_update_barang.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="hidden" name="produk_id" value="<?= $d['produk_id']; ?>">
                                            <input type="text" name="nama_produk" class="form-control" value="<?= $d['nama_produk']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Produk</label>
                                            <input type="text" name="harga" class="form-control" value="<?= $d['harga']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Stok Produk</label>
                                            <input type="text" name="stok" class="form-control" value="<?= $d['stok']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Hapus Data -->
                    <div class="modal fade" id="hapus-data<?= $d['produk_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="proses_hapus_barang.php" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="produk_id" value="<?= $d['produk_id']; ?>">
                                        Apakah anda yakin akan menghapus data <b><?= $d['nama_produk']; ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
    </div>   
</div>
<!-- Modal Tambah -->
<div class="modal fade" id="tambah-data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="proses_simpan_barang.php" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="hidden" name="produk_id" value="<?= $d["produk_id"] ?>">
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" name="stok" id="stok" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
<?php
include "footer.php";
?>