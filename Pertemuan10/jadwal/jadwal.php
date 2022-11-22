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
$result = array(); 
if (isset($_SESSION['data_filter']) && $_SESSION['data_filter'] != null) {
    $result = $_SESSION['data_filter'];
    $kueri = $_SESSION['kueri'];
}else{
    if (isset($_SESSION['kueri'])) {
        $kueri = $_SESSION['kueri'];
    }
    $sql = "SELECT * FROM jadwal_kuliah";
    $query = mysqli_query($con,$sql);
    while ($data = mysqli_fetch_array($query)) {
        $result[] = $data; //result dijadikan array 
    } 

    if (isset($_SESSION['msg'])) {
        $pesan = $_SESSION['msg'];
    }
}

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
    <title>Jadwal</title>
</head>

<body>
    <!-- modal add data -->
    <div class="modal fade" id="add_jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./proses.php" method="POST">
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
                                <div class="col-8">
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
                        <button type="button" class="btn btn-sm-secondary btn-outline-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-sm-primary btn-outline-primary" name="add_jadwal"
                            value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir modal add data -->

    <!-- table jadwal -->
    <section>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <button class="btn btn-small-primary btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#add_jadwal">Tambah Jadwal</button>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex flex-row-reverse">
                                <form action="./proses.php" method="POST">
                                    <input type="hidden" name="filter">
                                    <input type="hidden" name="by">
                                    <input type="submit" id="btnSubmit" name="btn_filter">
                                </form>
                                <div class="p-2">
                                    <a href="" class="btn btn-small-danger btn-outline-danger">
                                        Reset
                                        <?php session_destroy(); ?>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <select name="jam_keluar" id="jam_keluar_filter" class="form-control" required>
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
                                <div class="p-2">
                                    <select name="jam_masuk" id="jam_masuk_filter" class="form-control" required>
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
                                <div class="p-2">
                                    <select name="hari" id="hari_filter" class="form-control" required>
                                        <option value="#" disabled selected>Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                    </select>
                                </div>
                                <div class="p-2">
                                    <select name="Filter" id="kelas_filter" class="form-control" required>
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
                                <div class="p-2 ">
                                    <h5 class="mt-1">
                                        Filter Berdasarkan
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($kueri)) { ?>
                    <div class="alert alert-info" role="alert">
                        <strong>
                            <?= $kueri; ?>
                        </strong>
                    </div>
                    <?php } ?>  
                    <?php if (isset($pesan)) { ?>
                    <div class="alert alert-info" role="alert">
                        <strong>
                            <?= $pesan; ?>
                        </strong>
                    </div>
                    <?php } ?>  
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
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($result)) {?>
                            <?php $i=1; if($result != null) {?>
                            <?php foreach($result as $d){ ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $d["kode_matkul"]; ?></td>
                                <td><?= $d["matkul"]; ?></td>
                                <td><?= $d["kelas"]; ?></td>
                                <td><?= $d["pengampu"]; ?></td>
                                <td><?= $d["hari"]; ?></td>
                                <td><?= $d["jam_masuk"]; ?>-<?= $d["jam_keluar"]; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-small-info btn-outline-info" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit_<?= $d['kode_matkul']; ?>">
                                                Edit
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <form action="./proses.php" method="post">
                                                <input type="hidden" value="<?= $d['kode_matkul']; ?>"
                                                    name="kode_matkul">
                                                <input type="submit" class="btn btn-small-danger btn-outline-danger"
                                                    name="delete_jadwal" value="Delete"
                                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++;} ?>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- akhir table -->

    <!-- awal modal edit -->
    <?php if(isset($result)) {?>
    <?php if($result != null) {?>
    <?php foreach($result as $d){ ?>
    <div class="modal fade" id="modalEdit_<?= $d['kode_matkul']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./proses.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="kode_matkul" class="form-control">Kode Mata Kuliah</label>
                                </div>
                                <div class="col-8">
                                    <input type="hidden" value="<?= $d['kode_matkul']; ?>" name="kode_matkul">
                                    <input type="text" id="kode_matkul" class="form-control"
                                        value="<?= $d['kode_matkul']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="matkul" class="form-control">Nama Mata Kuliah</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="matkul" class="form-control" value="<?= $d['matkul']; ?>"
                                        name="matkul">
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-md-3 px-3">
                                    <label for="kelas" class="form-control">Kelas</label>
                                </div>
                                <div class="col-3">
                                    <select name="kelas" id="kelas" class="form-control" required>
                                        <option value="#" disabled selected>Pilih Kelas</option>
                                        <option value="Kelas A" <?php if($d['kelas'] == "Kelas A"){ ?> selected
                                            <?php } ?>>Kelas A</option>

                                        <option value="Kelas B" <?php if($d['kelas'] == "Kelas B"){ ?> selected
                                            <?php } ?>>Kelas B</option>

                                        <option value="Kelas C" <?php if($d['kelas'] == "Kelas C"){ ?> selected
                                            <?php } ?>>Kelas C</option>

                                        <option value="Kelas D" <?php if($d['kelas'] == "Kelas D"){ ?> selected
                                            <?php } ?>>Kelas D</option>

                                        <option value="Kelas E" <?php if($d['kelas'] == "Kelas E"){ ?> selected
                                            <?php } ?>>Kelas E</option>

                                        <option value="Kelas F" <?php if($d['kelas'] == "Kelas F"){ ?> selected
                                            <?php } ?>>Kelas F</option>

                                        <option value="Kelas G" <?php if($d['kelas'] == "Kelas G"){ ?> selected
                                            <?php } ?>>Kelas G</option>

                                        <option value="Kelas H" <?php if($d['kelas'] == "Kelas H"){ ?> selected
                                            <?php } ?>>Kelas H</option>

                                        <option value="Kelas I" <?php if($d['kelas'] == "Kelas I"){ ?> selected
                                            <?php } ?>>Kelas I</option>

                                        <option value="Kelas J" <?php if($d['kelas'] == "Kelas J"){ ?> selected
                                            <?php } ?>>Kelas J</option>

                                        <option value="Kelas K" <?php if($d['kelas'] == "Kelas K"){ ?> selected
                                            <?php } ?>>Kelas K</option>

                                        <option value="Kelas L" <?php if($d['kelas'] == "Kelas L"){ ?> selected
                                            <?php } ?>>Kelas L</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="pengampu" class="form-control">Pengampu</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="pengampu" class="form-control" value="<?= $d['pengampu']; ?>"
                                        name="pengampu">
                                </div>
                            </div>
                            <div class="col-md-12 input-group my-1">
                                <div class="col-3 px-3">
                                    <label for="hari" class="form-control">Hari</label>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <select name="hari" id="hari" class="form-control" required>
                                                <option value="#" disabled selected>Pilih Hari</option>
                                                <option value="Senin" <?php if($d['hari'] == "Senin"){ ?> selected
                                                    <?php } ?>>Senin</option>
                                                <option value="Selasa" <?php if($d['hari'] == "Selasa"){ ?> selected
                                                    <?php } ?>>Selasa</option>
                                                <option value="Rabu" <?php if($d['hari'] == "Rabu"){ ?> selected
                                                    <?php } ?>>Rabu</option>
                                                <option value="Kamis" <?php if($d['hari'] == "Kamis"){ ?> selected
                                                    <?php } ?>>Kamis</option>
                                                <option value="Jumat" <?php if($d['hari'] == "Jumat"){ ?> selected
                                                    <?php } ?>>Jumat</option>
                                                <option value="Sabtu" <?php if($d['hari'] == "Sabtu"){ ?> selected
                                                    <?php } ?>>Sabtu</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="jam_masuk" id="jam_masuk" class="form-control" required>
                                                <option value="#" disabled selected>Jam Masuk</option>
                                                <option value="07:00" <?php if($d['jam_masuk'] == "07:00"){ ?> selected
                                                    <?php } ?>>07:00</option>

                                                <option value="08:00" <?php if($d['jam_masuk'] == "08:00"){ ?> selected
                                                    <?php } ?>>08:00</option>

                                                <option value="09:00" <?php if($d['jam_masuk'] == "09:00"){ ?> selected
                                                    <?php } ?>>09:00</option>

                                                <option value="10:00" <?php if($d['jam_masuk'] == "10:00"){ ?> selected
                                                    <?php } ?>>10:00</option>

                                                <option value="11:00" <?php if($d['jam_masuk'] == "11:00"){ ?> selected
                                                    <?php } ?>>11:00</option>

                                                <option value="12:00" <?php if($d['jam_masuk'] == "12:00"){ ?> selected
                                                    <?php } ?>>12:00</option>

                                                <option value="13:00" <?php if($d['jam_masuk'] == "13:00"){ ?> selected
                                                    <?php } ?>>13:00</option>

                                                <option value="14:00" <?php if($d['jam_masuk'] == "14:00"){ ?> selected
                                                    <?php } ?>>14:00</option>

                                                <option value="15:00" <?php if($d['jam_masuk'] == "15:00"){ ?> selected
                                                    <?php } ?>>15:00</option>

                                                <option value="16:00" <?php if($d['jam_masuk'] == "16:00"){ ?> selected
                                                    <?php } ?>>16:00</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="jam_keluar" id="jam_keluar" class="form-control" required>
                                                <option value="#" disabled selected>Jam keluar</option>
                                                <option value="07:00" <?php if($d['jam_keluar'] == "07:00"){ ?> selected
                                                    <?php } ?>>07:00</option>

                                                <option value="08:00" <?php if($d['jam_keluar'] == "08:00"){ ?> selected
                                                    <?php } ?>>08:00</option>

                                                <option value="09:00" <?php if($d['jam_keluar'] == "09:00"){ ?> selected
                                                    <?php } ?>>09:00</option>

                                                <option value="10:00" <?php if($d['jam_keluar'] == "10:00"){ ?> selected
                                                    <?php } ?>>10:00</option>

                                                <option value="11:00" <?php if($d['jam_keluar'] == "11:00"){ ?> selected
                                                    <?php } ?>>11:00</option>

                                                <option value="12:00" <?php if($d['jam_keluar'] == "12:00"){ ?> selected
                                                    <?php } ?>>12:00</option>

                                                <option value="13:00" <?php if($d['jam_keluar'] == "13:00"){ ?> selected
                                                    <?php } ?>>13:00</option>

                                                <option value="14:00" <?php if($d['jam_keluar'] == "14:00"){ ?> selected
                                                    <?php } ?>>14:00</option>

                                                <option value="15:00" <?php if($d['jam_keluar'] == "15:00"){ ?> selected
                                                    <?php } ?>>15:00</option>

                                                <option value="16:00" <?php if($d['jam_keluar'] == "16:00"){ ?> selected
                                                    <?php } ?>>16:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm-secondary btn-outline-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-sm-primary btn-outline-primary" name="update_jadwal"
                            value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <!-- akhir modal edit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="proses.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>