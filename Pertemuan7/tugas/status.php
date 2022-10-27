<?php 
// setting coockie

if (isset($_POST["nomor_induk"])) {
    $no_induk = $_POST['nomor_induk'];
    setcookie("no_induk",$no_induk);
}else{}

if (isset($_POST["nama"])) {
    $nama = $_POST['nama'];
    setcookie("nama",$nama);
}else{}

if (isset($_POST["status"])) {
    $status = $_POST['status'];
    setcookie("status",$status);
}else{}

if (isset($_POST["minat"])) {
    $minat = $_POST['minat'];
    $all_minat = "";
    if ($minat > 1) {
        foreach ($minat as $value) {
            $all_minat .= $value. ", ";
        }
    }
    setcookie("minat",$all_minat);
}else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>
    <h1>Pendaftaran Berhasil</h1>
    <a href="./register.php">Back</a>
</body>
</html>