<?php
session_start();

if (isset($_SESSION['pesanan'])) {
    $pesanan = $_SESSION['pesanan'];

    $nama = $pesanan[0];
    $no_hp = $pesanan[1];
    $email = $pesanan[2];
    $pembayaran = $pesanan[3];
    $data = [];
    $data = $pesanan[4];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Barang Yang Dipesan | 205314020</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8 row">
                <h2>Konfirmasi Pesanan Barang</h2>
                <h6 class="mt-4">Nama : <?= $nama; ?></h6>
                <h6>Alamat Email : <?= $email; ?></h6>
                <h6>No. HP : <?= $no_hp; ?></h6>
                <h6 class="mb-5">Cara Pembayaran : <?= $pembayaran; ?></h6>

                <h5>Barang Yang Akan Di Beli</h5>
                <table class="table table-hover ">
                    <thead>
                        <tr class="table-success">
                            <th scope="col"></th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data as $key => $value) {?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $data[$key][0]; ?></td>
                                <td><?= $data[$key][1]; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
            <a href="./index.php" class="btn btn-primary" <?php session_destroy(); ?>
            >Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>