<?php 

function getConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventaris";
    $con = new mysqli($servername,$username,$password,$dbname);
    return $con;
}
$con = getConnect();
if ($con->connect_error) {
    $_SESSION['msg']="Gagal Menghubungkan".$con->connect_error;
    mysqli_close($con);
    header("Location:index.php");
}else{
    $sql = "SELECT * FROM stok_barang;";
    $data = $con->query($sql);
}

session_start();
if (isset($_SESSION['data']) && $_SESSION['data'] != null) {
    $kode = $_SESSION['data']["kode"];
    $nama = $_SESSION['data']["nama"];
    $jenis = $_SESSION['data']["jenis"];
    $lokasi = $_SESSION['data']["lokasi"];
    $harga = $_SESSION['data']["harga"];
    $jumlah = $_SESSION['data']["jumlah"];
}
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
                        <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="close"
                            onclick=""></button>
                        <?php session_destroy() ?>
                    </div>
                    <?php } ?>
                    <!-- akhir session -->
                    <form action="./proses.php" method="post">
                        <div class="input-group pt-3">
                            <div class="col-3 px-2">
                                <label for="kode" class="form-control">Kode Barang</label>
                            </div>
                            <div class="col-9">
                                <?php if (isset($kode)) { ?>
                                    <?php if ($kode != null) { ?>
                                        <input type="text" name="kode" class="form-control" required value="<?= $kode; ?>">
                                    <?php } ?>
                                <?php }else{?>
                                    <input type="text" name="kode" class="form-control" required value="">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="nama_barang" class="form-control">Nama Barang</label>
                            </div>
                            <div class="col-9">
                                <?php if(isset($nama) && $nama != null) {?>
                                    <input type="text" name="nama_barang" value="<?= $nama; ?>" class="form-control" required>
                                <?php }else{ ?>
                                        <input type="text" name="nama_barang" value="" class="form-control" required>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="" class="form-control">Jenis Barang</label>
                            </div>
                            <div class="col-9">
                                <div class="form-form-check form-check-inline">
                                    <input class="form-check-input" id="jenis_barang1" value="Makanan" name="jenis_barang" type="radio" required
                                    <?php if(isset($jenis) && $jenis != null && $jenis == "Makanan"){ ?>
                                        checked
                                    <?php } ?>
                                    >
                                    <label for="jenis_barang1" class="form-check-label">Makanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="jenis_barang2" value="Non" name="jenis_barang" type="radio" required
                                    <?php if(isset($jenis) && $jenis != null && $jenis == "Non"){ ?>
                                        checked
                                    <?php } ?>
                                    >
                                    <label for="jenis_barang2" class="form-check-label">Non Makanan</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="lokasi" class="form-control">Lokasi</label>
                            </div>
                            <div class="col-9">
                                <select name="lokasi" class="form-control" required>
                                    <option value="#" disabled selected>Pilih</option>
                                    
                                    <option value="Rak A" 
                                    <?php if(isset($lokasi) && $lokasi != null && $lokasi == "Rak A"){ ?>
                                        selected
                                    <?php } ?>
                                    >Rak A</option>
                                    
                                    <option value="Rak B"
                                    <?php if(isset($lokasi) && $lokasi != null && $lokasi == "Rak B"){ ?>
                                        selected
                                    <?php } ?>
                                    >Rak B</option>
                                    
                                    <option value="Rak C" 
                                    <?php if(isset($lokasi) && $lokasi != null && $lokasi == "Rak C"){ ?>
                                        selected
                                    <?php } ?>
                                    >Rak C</option>
                                    
                                    <option value="Rak D"
                                    <?php if(isset($lokasi) && $lokasi != null && $lokasi == "Rak D"){ ?>
                                        selected
                                    <?php } ?>
                                    >Rak D</option>
                                    
                                    <option value="Rak E" 
                                    <?php if(isset($lokasi) && $lokasi != null && $lokasi == "Rak E"){ ?>
                                        selected
                                    <?php } 
                                    
                                    ?>
                                    
                                    >Rak E</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="harga_satuan" class="form-control">Harga Satuan Barang</label>
                            </div>
                            <div class="col-9">
                                <?php if(isset($harga) && $harga != null) { ?>
                                    <input type="text" name="harga_satuan" value="<?= $harga; ?>" class="form-control" required>
                                <?php }else{ ?>
                                    <input type="text" name="harga_satuan" class="form-control" required>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="input-group pt-2">
                            <div class="col-3 px-2">
                                <label for="jumlah_stok" class="form-control">Jumlah Stok Barang</label>
                            </div>
                            <div class="col-9">
                                <?php if(isset($jumlah) && $jumlah){ ?>
                                    <input type="text" name="jumlah_stok" class="form-control" value="<?= $jumlah; ?>" required>
                                <?php }else{ ?>
                                    <input type="text" name="jumlah_stok" class="form-control" required>
                                <?php } ?>
                            </div>
                        </div>
                </div>
                <div class="col-2 pt-5"></div>

                <div class="col-md-12 text-center pt-4">
                    <input type="submit" class="btn btn-outline-primary" name="baru" value="Simpan">
                    <input type="submit" class="btn btn-outline-secondary" name="update" value="Update">
                    <input type="submit" class="btn btn-outline-danger" name="hapus" value="Hapus">
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                        data-bs-target="#Cari">Cari</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- akhir input -->

    <!-- modals -->
    <section>
        <!-- Modal -->
        <div class="modal fade" id="Cari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cari Data Berdasarkan Kode Barang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="./proses.php" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="input_data" class="form-label">Pilih Kode Barang</label>
                                <?php if($data != null) {?>
                                <select name="cari_data" class="form-control" required>
                                    <option value="#" disabled selected>Pilih</option>
                                    <?php foreach($data as $d) { ?>
                                        <option value="<?= $d["kode"]; ?>"><?= $d["kode"]; ?></option>
                                    <?php } ?>
                                </select>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir modals -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>