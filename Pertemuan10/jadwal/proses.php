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

$con = getConnect();
if ($con->connect_error) {
    $_SESSION['msg']="Gagal Menghubungkan".$con->connect_error;
    mysqli_close($con);
    // header("Location:index.php");
}

// filter
if (isset($_POST['btn_filter'])) {
    $kata_kunci = $_POST['filter'];
    $berdasar = $_POST['by'];
    if ($berdasar == "jam_masuk") {
        $sql = "SELECT * FROM jadwal_kuliah WHERE jam_masuk = '$kata_kunci'";
    }elseif ($berdasar == "jam_keluar") {
        $sql = "SELECT * FROM jadwal_kuliah WHERE jam_keluar = '$kata_kunci'";
    }elseif ($berdasar == "hari") {
        $sql = "SELECT * FROM jadwal_kuliah WHERE hari = '$kata_kunci'";
    }elseif ($berdasar == "kelas") {
        $sql = "SELECT * FROM jadwal_kuliah WHERE kelas = '$kata_kunci'";
    }

    $query = mysqli_query($con,$sql);
    $result = array(); 
    while ($data = mysqli_fetch_array($query)) {
        $result[] = $data; //result dijadikan array 
    } 

    if ($result != null) {
        $_SESSION['data_filter'] = $result;
        $_SESSION['kueri'] = 'Filter yang di gunakan berdasarkan '.$berdasar.' dan datanya '.$kata_kunci;
        header("Location:jadwal.php");
    }else{
        $_SESSION['kueri'] = 'Filter yang di gunakan berdasarkan '.$berdasar.' dan datanya '.$kata_kunci.' (Tidak Ada Data Yang Sama)';
        $_SESSION['data_filter'] = null;
        header("Location:jadwal.php");
    }
}

// create
if (isset($_POST['delete_jadwal'])) {
    try {
        $sql = "DELETE from jadwal_kuliah where kode_matkul = '$kode_matkul';";
        $data = $con->query($sql);
        if ($data) {
            $_SESSION['msg'] = "Data Berhasil Dihapus";
            mysqli_close($con);
            header("Location:jadwal.php");
        }else{
            $_SESSION['msg'] = "Error: " . $sql . "<br>" . $conn->error;
            mysqli_close($con);
            header("Location:jadwal.php");
        }
    }catch (Exception $e) {
        $_SESSION['msg'] = "Error: " . $sql . "<br>" . $e->error;
        mysqli_close($con);
        header("Location:jadwal.php");
    }
}

if (isset($_POST["add_jadwal"])) {
    try {
        if ($kode_matkul == null || $matkul == null || $kelas == null || $pengampu == null || $hari == null || $jam_masuk == null || $jam_keluar == null ) {
            $_SESSION['msg'] = "Semua Form Harus Di Isi";
            header("Location:jadwal.php");   
        }else{
            $sql = "INSERT INTO jadwal_kuliah (kode_matkul,matkul,kelas,pengampu,hari,jam_masuk,jam_keluar) 
                    VALUES ('$kode_matkul','$matkul','$kelas','$pengampu','$hari','$jam_masuk','$jam_keluar')";
            $data = $con->query($sql);
            if ($data) {
                $_SESSION['msg']="Data Berhasil Dimasukkan";
                mysqli_close($con);
                header("Location:jadwal.php");
            }
        }
    } catch (Exception $e) {
        $_SESSION['msg'] = "Error: Id yang baru dah ada di database pak";
        mysqli_close($con);
        header("Location:jadwal.php");
    }
}
else if (isset($_POST['update_jadwal'])) {
    try {
        if ($kode_matkul == null || $matkul == null || $kelas == null || $pengampu == null || $hari == null || $jam_masuk == null || $jam_keluar == null ) {
            $_SESSION['msg'] = "Semua Form Harus Di Isi";
            header("Location:jadwal.php");   
        }else{
            $sql = "UPDATE jadwal_kuliah SET matkul = '$matkul', kelas = '$kelas', pengampu = '$pengampu' , hari = '$hari', jam_masuk = '$jam_masuk', jam_keluar = '$jam_keluar' 
                    WHERE kode_matkul = '$kode_matkul';";
            $data = $con->query($sql);
            if ($data) {
                $_SESSION['msg']="Data Berhasil Diubah";
                mysqli_close($con);
                header("Location:jadwal.php");
            }
        }
    } catch (Exception $e) {
        $_SESSION['msg'] = "Error: " . $sql . "<br>" . $e->error;
        mysqli_close($con);
        header("Location:jadwal.php");
    }
}
?>