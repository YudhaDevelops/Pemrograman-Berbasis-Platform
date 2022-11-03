<?php 
session_start();
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
                <h6>Selamat Datang <?= $masuk['nama']; ?></h6>
                <a href="./logout.php">Logout Gan?</a>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6" id="form">
                <form action="" method="post">
                    <h2>Makanan Minuman</h2>
                    <ul>
                        <li class="bersih">
                            <input id="gula" type="checkbox" value="">
                            <label for="gula"> Gula</label>                             
                        </li>
                        <li class="bersih">
                            <input id="teh" type="checkbox" value="">
                            <label for="teh"> Teh</label>                             
                        </li>
                        <li class="bersih">
                            <input id="Kopi" type="checkbox" value="">
                            <label for="Kopi"> Kopi</label>                             
                        </li>
                        <li class="bersih">
                            <input id="Susu" type="checkbox" value="">
                            <label for="Susu"> Susu</label>                             
                        </li>
                        <li class="bersih">
                            <input id="Biskuit" type="checkbox" value="">
                            <label for="Biskuit"> Biskuit</label>                             
                        </li>
                    </ul>

                    <h2>Peralatan Mandi</h2>
                    <ul>
                        <li class="bersih">
                            <input id="sikat_gigi" type="checkbox" value="">
                            <label for="sikat_gigi"> sikat_gigi</label>                             
                        </li>
                        <li class="bersih">
                            <input id="pasta_gigi" type="checkbox" value="">
                            <label for="pasta_gigi"> pasta_gigi</label>                             
                        </li>
                        <li class="bersih">
                            <input id="sabun" type="checkbox" value="">
                            <label for="sabun"> sabun</label>                             
                        </li>
                        <li class="bersih">
                            <input id="sampo" type="checkbox" value="">
                            <label for="sampo"> sampo</label>                             
                        </li>
                        <li class="bersih">
                            <input id="sabun_cuci_muka" type="checkbox" value="">
                            <label for="sabun_cuci_muka"> sabun_cuci_muka</label>                             
                        </li>
                    </ul>

                    <h2>Alat Tulis</h2>
                    <ul>
                        <li class="bersih">
                            <input id="pensil" type="checkbox" value="">
                            <label for="pensil"> pensil</label>                             
                        </li>
                        <li class="bersih">
                            <input id="penggaris" type="checkbox" value="">
                            <label for="penggaris"> penggaris</label>                             
                        </li>
                        <li class="bersih">
                            <input id="penghapus" type="checkbox" value="">
                            <label for="penghapus"> penghapus</label>                             
                        </li>
                        <li class="bersih">
                            <input id="ballpoint" type="checkbox" value="">
                            <label for="ballpoint"> ballpoint</label>                             
                        </li>
                        <li class="bersih">
                            <input id="kertas_hvs" type="checkbox" value="">
                            <label for="kertas_hvs"> kertas_hvs</label>                             
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>