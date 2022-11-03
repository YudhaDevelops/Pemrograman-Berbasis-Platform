<?php 
session_start();
$keranjang = [];
if (isset($_POST['makanMinum'])) {
    $makan_minum = $_POST['makanMinum'];
    foreach ($makan_minum as $value) {
        array_push($keranjang,$value);
    }
}
if (isset($_POST['alatMandi'])) {
    $alat_mandi = $_POST['alatMandi'];
    foreach ($alat_mandi as $key => $value) {
        array_push($keranjang,$value);
    }
}
if (isset($_POST['alatTulis'])) {
    $alat_tulis = $_POST['alatTulis'];
    foreach ($alat_tulis     as $key => $value) {
        array_push($keranjang,$value);
    }
}
$_SESSION['keranjang'] = $keranjang;
header("Location:keranjang.php");
?>