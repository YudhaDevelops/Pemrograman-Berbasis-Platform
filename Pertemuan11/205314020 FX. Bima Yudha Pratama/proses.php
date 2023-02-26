<?php 
session_start();

// cek semua form
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
}else{
    $nama = null;
}

if (isset($_POST['no_hp'])) {
    $no_hp = $_POST['no_hp'];
}else{
    $no_hp = null;
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}else{
    $email = null;
}

if (isset($_POST['pembayaran'])) {
    $pembayaran = $_POST['pembayaran'];
}else{
    $pembayaran = null;
}

if (isset($_POST['pilihBarang'])) {
    $pilihBarang = $_POST['pilihBarang'];
}else{
    $pilihBarang = null;
}


if (isset($_POST['pilihSony'])) {
    $pilihSony = $_POST['pilihSony'];
}else{
    $pilihSony = null;
}
if (isset($_POST['pilihCreative'])) {
    $pilihCreative = $_POST['pilihCreative'];
}else{
    $pilihCreative = null;
}
if (isset($_POST['piligLg'])) {
    $piligLg = $_POST['piligLg'];
}else{
    $piligLg = null;
}
if (isset($_POST['pilihSamsung'])) {
    $pilihSamsung = $_POST['pilihSamsung'];
}else{
    $pilihSamsung = null;
}
if (isset($_POST['pilihTosiba'])) {
    $pilihTosiba = $_POST['pilihTosiba'];
}else{
    $pilihTosiba = null;
}



if (isset($_POST["pesan_sekarang"])) {
    if ($nama == null || $email == null || $pembayaran == null || $pilihBarang == null || $no_hp == null) {
        $_SESSION['msg'] = "Semua Form Harus Di Isi";
        header("Location:index.php");   
    }else{
        $data = [];
        $dataBarang = [];
        array_push($data,$nama);
        array_push($data,$no_hp);
        array_push($data,$email);
        array_push($data,$pembayaran);
        foreach ($pilihBarang as $key => $value) {
            $barang = [];
            array_push($barang,$pilihBarang[$key],$piligLg);
            array_push($dataBarang,$barang);
        }
        array_push($data,$dataBarang);
        $_SESSION['pesanan'] = $data;
        // var_dump($data);
        header("Location:konfirmasi_pesanan.php");
    }
}

?>