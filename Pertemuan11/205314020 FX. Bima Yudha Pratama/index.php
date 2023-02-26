<?php
session_start();
if (isset($_SESSION['msg'])) {
    $pesan = $_SESSION['msg'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pesan Barang | 205314020</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8 row">
                <?php if (isset($pesan)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $pesan; ?>
                        <?php session_destroy(); ?>
                    </div>
                <?php } ?>
                <form action="./proses.php" method="post">
                    <h2 class="text-start">Form Pemesanan Barang</h2>
                    <div class="form-group my-2">
                        <label for="nama">Nama</label>
                        <input class="form-control" name="nama" type="text">
                    </div>
                    <div class="form-group my-2">
                        <label for="no_hp">Nomor HP</label>
                        <input class="form-control" name="no_hp" type="text">
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Alamat Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="my-2">
                        <label for="pembayaran">Cara Pembayaran</label>
                        <div class="form-check">
                            <input class="form-check-input" value="Via Transfer BCA" type="radio" name="pembayaran" id="bca">
                            <label class="form-check-label" for="bca">
                                Via Transfer BCA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="Via Transfer Mandiri" type="radio" name="pembayaran" id="mandiri">
                            <label class="form-check-label" for="mandiri">
                                Via Transfer Mandiri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="Via Transfer BNI" type="radio" name="pembayaran" id="bni">
                            <label class="form-check-label" for="bni">
                                Via Transfer BNI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="COD" type="radio" name="pembayaran" id="cod">
                            <label class="form-check-label" for="cod">
                                COD
                            </label>
                        </div>
                    </div>
                    <!-- table -->
                    <div class="">
                        <h4>Barang yang akan di beli</h4>
                        <table class="table table-hover ">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col"></th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" name="pilihBarang[]" value="Sony TV LED 20"" id="pilihSony">
                                    </th>
                                    <td>
                                        <label for="pilihSony">
                                            Sony TV LED 20"
                                        </label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pilihSony">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" name="pilihBarang[]" value="Creative Speaker" id="pilihCreative">
                                    </th>
                                    <td>
                                        <label for="pilihCreative">
                                            Creative Speaker
                                        </label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pilihCreative">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" name="pilihBarang[]" value="LG DVD Player" id="piligLg">
                                    </th>
                                    <td>
                                        <label for="piligLg">
                                            LG DVD Player
                                        </label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="piligLg">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" name="pilihBarang[]" value="Samsung Air Conditioner" id="pilihSamsung">
                                    </th>
                                    <td>
                                        <label for="pilihSamsung">
                                            Samsung Air Conditioner
                                        </label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pilihSamsung">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" name="pilihBarang[]" value="Toshiba Mini Proyektor" id="pilihTosiba">
                                    </th>
                                    <td>
                                        <label for="pilihTosiba">
                                            Toshiba Mini Proyektor
                                        </label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pilihTosiba">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input class="btn btn-success" type="submit" name="pesan_sekarang" value="Pesan"></input>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>