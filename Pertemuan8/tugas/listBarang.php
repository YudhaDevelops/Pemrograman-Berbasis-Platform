<?php 
session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = null;
    $_SESSION['makanMinum'] = null;
    $_SESSION['alatMandi'] = null;
    $_SESSION['alatTulis'] = null;
    $_SESSION['keranjang'] = null;
    // data username yang tersedia
    $user = [
        [
            'nama'     => 'Yulius Agung Trisnanto',
            'username' => 'Yulius',
            'password' => 'yulius123'
        ],
        [
            'nama'     => 'Jhosephine Diva Verol A',
            'username'  => 'verol',
            'password'  => 'verol123',
        ],
        [
            'nama'     => 'FX. Bima Yudha Pratama',
            'username'  => 'yudha',
            'password'  => 'yudha123',
        ]
    ];
    
    if (isset($_POST["username"])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    $masuk = null;
    if ($username != null) {
        foreach ($user as $x => $value) {
            if ($user[$x]['username'] == $username) {
                if ($user[$x]['password'] == $password) {
                    $masuk = $user[$x]; 
                    break;
                }
            }
        }    
    }
    if ($masuk == null) {
        $_SESSION['msg']="Invalid Username or Password";
        header("Location:loginFailed.php");
    }else{
        $_SESSION['user'] = $masuk;
    }
}

$makanMinum = ['Gula', 'Teh','Kopi','Susu', 'Biskuit'];
$alat_mandi = ['Sikat Gigi','Pasta Gigi','Sabun','Sampo','Sabun Cuci Muka'];
$alat_tulis = ['Pensil','Penggaris','Penghapus','Ballpoint','Kertas HVS'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Barang Yang Mau Di Beli Gan</title>
    <!-- css bootstrap online -->
    <style>
        .bersih {
            list-style-type:none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-xl-12 mb-5 text-center">
                <h1 >PILIH BARANG</h1>
                <h6>Selamat Datang <?= $_SESSION['user']['nama']; ?></h6>
                <a href="./logout.php">Logout Gan?</a>
            </div>
            <div class="col"></div>
            <div class="col-6" id="form">
                <form action="./proses.php" method="post">
                    <h2>Makanan Minuman</h2>
                    <ul>
                        <?php 
                        foreach ($makanMinum as $value) {
                            echo "
                            <li class='bersih'>
                            <input id='$value' name='makanMinum[]' type='checkbox' value='$value'>
                            <label for='$value'>$value</label>                             
                            </li>";
                        }
                        ?>
                    </ul>

                    <h2>Peralatan Mandi</h2>
                    <ul>
                        <?php 
                        foreach ($alat_mandi as $value) {
                            echo "
                            <li class='bersih'>
                            <input id='$value' name='alatMandi[]' type='checkbox' value='$value'>
                            <label for='$value'>$value</label>                             
                            </li>";
                        }
                        ?>
                    </ul>

                    <h2>Alat Tulis</h2>
                    <ul>
                        <?php 
                        foreach ($alat_tulis as $value) {
                            echo "
                            <li class='bersih'>
                            <input id='$value' name='alatTulis[]' type='checkbox' value='$value'>
                            <label for='$value'>$value</label>                             
                            </li>";
                        }
                        ?>
                    </ul>
                    <div class="col mb-4  text-center">
                        <button type="submit" name="btnSubmit" class="btn btn-outline-primary">Masuk Keranjang</button>
                    </div>
                    <?php if ($_SESSION['keranjang'] != null) {?> 
                        <div class="col  text-center">
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Keranjang</button>
                        </div>
                    <?php } ?>
                </form>
            </div>
            <div class="col"></div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Keranjang Anda Saat Ini</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <?php if ($_SESSION['keranjang'] != null) { ?>
                                <?php foreach ($_SESSION['keranjang'] as $value) {?>
                                    <li><?= $value; ?></li>
                                <?php } ?>
                                <?php } ?>
                            </ol>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>