<?php 
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventaris";
    
    $con = new mysqli($servername,$username,$password,$dbname);
    $sql = "SELECT * FROM stok_barang";
    $result = $con->query($sql);
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>List Daftar Stok</title>
</head>

<body>
    <!--awal table  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pt-5">
                    <h4 class="text-center">Daftar Stok Barang <br> Toko Kelontong Bahagia</h4>
                </div>
                <div class="col-12 pt-5">
                    <?php if(isset($_SESSION['msg'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $_SESSION['msg']; ?>
                            <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="close"></button>
                            <?php session_destroy() ?>
                        </div>
                    <?php } ?>
                    <table class="table table-hover table-bordered">
                        <thead class=" table-success">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; if($result->num_rows > 0) {?>
                            <?php foreach($result as $p) {?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['kode']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['jenis']; ?></td>
                                <td><?= $p['lokasi']; ?></td>
                                <td><?= $p['harga']; ?></td>
                                <td><?= $p['jumlah']; ?></td>
                            </tr>
                            <?php $i++; } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="col-12 text-center">
                        <a href="./index.php" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- akhir table -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>