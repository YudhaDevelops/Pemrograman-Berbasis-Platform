<?php 

session_start();
// get koneksi
function getConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kuliah";
    $con = new mysqli($servername, $username, $password, $dbname);
    return $con;
}

// cek semua form
if (isset($_POST['kode_matkul'])) {
    $kode_matkul = $_POST['kode_matkul'];
}else{
    $kode_matkul = null;
}

if (isset($_POST['matkul'])) {
    $matkul = $_POST['matkul'];
}else{
    $matkul = null;
}

if (isset($_POST['kelas'])) {
    $kelas = $_POST['kelas'];
}else{
    $kelas = null;
}

if (isset($_POST['pengampu'])) {
    $pengampu = $_POST['pengampu'];
}else{
    $pengampu = null;
}

if (isset($_POST['hari'])) {
    $hari = $_POST['hari'];
}else{
    $hari = null;
}

if (isset($_POST['jam_masuk'])) {
    $jam_masuk = $_POST['jam_masuk'];
}else{
    $jam_masuk = null;
}

if (isset($_POST['jam_keluar'])) {
    $jam_keluar = $_POST['jam_keluar'];
}else{
    $jam_keluar = null;
}

if ($kode_matkul == null || $matkul == null || $kelas == null || $pengampu == null || $hari == null || $jam_masuk == null || $jam_keluar == null) {
    $_SESSION['msg'] = "Semua Form Harus Di Isi";
    header("Location:jadwal.php");   
}

$con = getConnect();
if ($con->connect_error) {
    $_SESSION['msg']="Gagal Menghubungkan".$con->connect_error;
    mysqli_close($con);
    header("Location:index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($con->connect_error) {
        $_SESSION['msg']="Gagal Menghubungkan".$con->connect_error;
        mysqli_close($con);
        header("Location:jadwal.php");
    }

    if (isset($_POST["add_jadwal"])) {
        var_dump($matkul);
        try {
            $sql = "INSERT INTO jadwal_kuliah (kode,nama,jenis,lokasi,harga,jumlah) 
                    VALUES ('$kode_barang','$nama_barang','$jenis_barang','$lokasi','$harga','$jumlah_stok')";
            $data = $con->query($sql);
            if ($data) {
                $_SESSION['msg']="Data Berhasil Dimasukkan";
                mysqli_close($con);
                header("Location:table.php");
            }
        } catch (Exception $e) {
            $_SESSION['msg'] = "Error: Id yang baru dah ada di database pak";
            mysqli_close($con);
            header("Location:index.php");
        }
    }
}
else{
}

mysqli_close($con);
?>