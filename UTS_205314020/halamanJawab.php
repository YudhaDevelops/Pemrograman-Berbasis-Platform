<?php 

$nama = $_POST["nama"];
if (!isset($_POST["makanan"])) {
    $makanan = 0;
}else{
    $makanan = $_POST["makanan"];
}

if (!isset($_POST["minuman"])) {
    $minuman = 0;
}else{
    $minuman = $_POST["minuman"];
}

if ($nama == null) {
    $nama = "Anonim";
}

if ($makanan == null) {
    $makanan = 0;
}

if ($minuman == null) {
    $minuman = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
    <style>
    .kembali {
        width: 100%;
        text-decoration: none;
        color: black;
    }
    </style>
</head>
<body>
    <h1>Tampilkan Pesanan</h1>
    <h3>
        <?= $nama; ?> Memesan :
    </h3>

    <h4>Makanan : </h4>
    <ol>
        <?php 
            if ($makanan >= 1) {
                foreach($makanan as $makan){
                    echo 
                    "
                    <li> $makan </li>
                    ";
                }
            }else{
                echo "
                <h3>Tidak Memesan Makanan</h3>
                ";
            }
        ?>
    </ol>
    <h4>Minuman : </h4>
    <ol>
        <?php 
            if ($minuman >= 1) {
                foreach($minuman as $minum){
                    echo 
                    "
                    <li> $minum </li>
                    ";
                }
            }else{
                echo "
                <h3>Tidak Memesan Minuman</h3>
                ";
            }
        ?>
    </ol>
    <button>
        <a href="halamanInput.php" type="button" class="kembali">Kembali</a>
    </button>
</body>

</html>