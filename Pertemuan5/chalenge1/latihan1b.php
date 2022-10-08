<?php 

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$status = $_POST["status"];

$pesan = "Mahasiswa dengan nama ".$nama." NIM ".$nim ." berhasil menyelesaikan studi S1 dengan predikat ". $status;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>
<body>
    <h1>STATUS KELULUSAN MAHASISWA</h1>
    <p><?= $pesan; ?></p>
</body>
</html>