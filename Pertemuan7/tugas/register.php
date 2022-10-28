<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register dengan cookie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        
        <!-- modal form -->
        <div class="container">
            <?php 
            if (isset($_COOKIE['no_induk']) && isset($_COOKIE['nama']) && isset($_COOKIE['status']) && isset($_COOKIE['minat'])) {
                echo "
                    <div class='row'>
                        <div class='col-lg-12'>
                            <table class='table table-striped'>
                                <tr colspan='2'>
                                    <h1>Anda Sudah Terdaftar Sebagai Peserta Seminar</h1>
                                </tr>
                                <tr>
                                    <td>Nomor Induk</td>
                                    <td>".
                                            $_COOKIE['no_induk']
                                        ."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>". $_COOKIE['nama'] ."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>". $_COOKIE['status']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Minat</td>
                                    <td>". $_COOKIE['minat']."
                                    </td>
                                </tr>
                                <tr colspan='2'>
                                <a href='./delCookie.php' class='btn btn-outline-danger' type='button' id='hapus_cookie'>Hapus Coockie</a>
                                </tr>
                            </table>
                        </div>
                    </div>
                ";
            }else{
                echo"
                <div class='row text-center'>
                    <div class='col-lg-12 pt-5'>
                        <button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                        Add Coockie
                        </button>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title fs-5" id="staticBackdropLabel">PENDAFTARAN PESERTA SEMINAR</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="./status.php" method="post">
                  <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="nomor_induk" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Dosen" name="status" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Dosen</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Mahasiswa" name="status" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Mahasiswa</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="minat">Minat</label>
                            <br>
                            <div class="ml-2">
                                <input type="checkbox" name="minat[]" id="minat1" value="Programing">
                                <label for="minat1">Programing</label>
                            </div>
                            <div class="ml-2">
                                <input type="checkbox" name="minat[]" id="minat2" value="Database">
                                <label for="minat2">Database</label>
                            </div>
                            <div class="ml-2">
                                <input type="checkbox" name="minat[]" id="minat3" value="Networking">
                                <label for="minat3">Networking</label>
                            </div>
                            <div class="ml-2">
                                <input type="checkbox" name="minat[]" id="minat4" value="Multimedia">
                                <label for="minat4">Multimedia</label>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button"  class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button submit" id="buat_cookie" class="btn btn-outline-primary">Buat Cookie</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end modal form -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>