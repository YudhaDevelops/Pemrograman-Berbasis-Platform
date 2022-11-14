<?php

session_start();

function getConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kuliah";
    $con = new mysqli($servername, $username, $password, $dbname);
    return $con;
}
$con = getConnect();
$sql = "SELECT * FROM jadwal_kuliah";
$result = $con->query($sql);
// var_dump($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Jadwal</title>
</head>

<body>
    <!-- awal button atas -->
    <section>
        <div class="container-fluid my-5 pb-sm-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-4 position-absolute start-50">
                    <button class="btn btn-small-primary btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#add_jadwal">Tambah Jadwal</button>
                    Lihat Berdasarkan <button class="btn btn-small-primary btn-outline-primary">Cek</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    <!-- akhir button atas -->

    <!-- modal add data -->
    <div class="modal fade" id="add_jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./proses.php" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="kode_matkul" class="form-control">Kode Mata Kuliah</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="kode_matkul" class="form-control" name="kode_matkul">
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="matkul" class="form-control">Nama Mata Kuliah</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="matkul" class="form-control" name="matkul">
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-md-3 px-3">
                                    <label for="kelas" class="form-control">Kelas</label>
                                </div>
                                <div class="col-3">
                                    <select name="kelas" id="kelas" class="form-control" required>
                                        <option value="#" disabled selected>Pilih Kelas</option>
                                        <option value="Kelas A">Kelas A</option>
                                        <option value="Kelas B">Kelas B</option>
                                        <option value="Kelas C">Kelas C</option>
                                        <option value="Kelas D">Kelas D</option>
                                        <option value="Kelas E">Kelas E</option>
                                        <option value="Kelas F">Kelas F</option>
                                        <option value="Kelas G">Kelas G</option>
                                        <option value="Kelas H">Kelas H</option>
                                        <option value="Kelas I">Kelas I</option>
                                        <option value="Kelas J">Kelas J</option>
                                        <option value="Kelas K">Kelas K</option>
                                        <option value="Kelas L">Kelas L</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="pengampu" class="form-control">Pengampu</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="pengampu" class="form-control" name="pengampu">
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="hari" class="form-control">Hari</label>
                                </div>
                                <div class="col-8" >
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <select name="hari" id="hari" class="form-control" required>
                                                <option value="#" disabled selected>Pilih Hari</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="jam_masuk" id="jam_masuk" class="form-control" required>
                                                <option value="#" disabled selected>Jam Masuk</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="09:00">09:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="jam_keluar" id="jam_keluar" class="form-control" required>
                                                <option value="#" disabled selected>Jam keluar</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="09:00">09:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm-secondary btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-sm-primary btn-outline-primary" name="add_jadwal" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir modal add data -->

    <!-- informasi user -->
    <section>
        <div class="container">

        </div>
    </section>
    <!-- akhir informasi user -->
    
    <!-- table jadwal -->
    <section>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table table-hover" border="1">
                        <thead>
                            <tr class=" table-success">
                                <th scope="col">No</th>
                                <th scope="col">Kode Mata Kuliah</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Pengampu</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Jam Masuk - Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php if(isset($result)) {?>
                                    <?php $i=1; if($result != null) {?>
                                        <?php foreach($result as $d){ ?>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $d["kode_matkul"]; ?></td>
                                        <td><?= $d["matkul"]; ?></td>
                                        <td><?= $d["kelas"]; ?></td>
                                        <td><?= $d["pengampu"]; ?></td>
                                        <td><?= $d["hari"]; ?></td>
                                        <td><?= $d["jam_masuk"]; ?>-<?= $d["jam_keluar"]; ?></td>
                                        <?php $i++;} ?>
                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- akhir table -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>