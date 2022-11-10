<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Input Data</title>
</head>

<body>
    <!--awal input  -->
    <section>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h4>Input Stok Gudang <br> Toko Kelontong Bahagia</h4>
                        <a href="./table.php">Lihat Stok</a>
                    </div>
                </div>

                <div class="col-2 pt-5"></div>
                <div class="col-8 pt-5">
                    <!-- session gagal input -->
                    <?php if(isset($_SESSION['msg'])) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= $_SESSION['msg']; ?>
                            <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="close" onclick=""></button>
                            <?php session_destroy() ?>
                        </div>
                    <?php } ?>
                    <!-- akhir session -->
                    <form action="./table.php" method="post">
                        <div class="input-group pt-3">
                            <div class="col-3 px-2">
                                <label for="kode" class="form-control">Kode Barang</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="kode" class="form-control" required>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="nama_barang" class="form-control">Nama Barang</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="nama_barang" class="form-control"  required>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="" class="form-control">Jenis Barang</label>
                            </div>
                            <div class="col-9">
                                <div class="form-form-check form-check-inline">
                                    <input class="form-check-input" id="jenis_barang1" name="jenis_barang" type="radio" required>
                                    <label for="jenis_barang1" class="form-check-label">Makanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="jenis_barang2" name="jenis_barang" type="radio" required>
                                    <label for="jenis_barang2" class="form-check-label">Non Makanan</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="lokasi" class="form-control">Lokasi</label>
                            </div>
                            <div class="col-9">
                                <select name="lokasi" class="form-control"  required>
                                    <option value="#" disabled selected>Pilih</option>
                                    <option value="Rak A">Rak A</option>
                                    <option value="Rak B">Rak B</option>
                                    <option value="Rak C">Rak C</option>
                                    <option value="Rak D">Rak D</option>
                                    <option value="Rak E">Rak E</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="harga_satuan" class="form-control">Harga Satuan Barang</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="harga_satuan" class="form-control" required>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="jumlah_stok" class="form-control">Jumlah Stok Barang</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="jumlah_stok" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 pt-5"></div>
    
                    <div class="col-md-12 text-center pt-4">
                        <button type="submit" class="btn btn-outline-primary"><?php $_SESSION['kirim']="baru" ?>Simpan</button>
                        <button type="button" class="btn btn-outline-secondary">Update</button>
                        <button type="button" class="btn btn-outline-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- akhir input -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>