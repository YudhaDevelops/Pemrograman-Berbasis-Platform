<?php 
session_start();
    if (isset($_POST['kode'])) {
        $kode_barang = $_POST['kode'];
    }else{
        $kode_barang = null;
    }

    if (isset($_POST['nama_barang'])) {
        $nama_barang = $_POST['nama_barang'];
    }else{
        $nama_barang = null;
    }
    
    if (isset($_POST['jenis_barang'])) {
        $jenis_barang = $_POST['jenis_barang'];
    }else{
        $jenis_barang = null;
    }

    if (isset($_POST['lokasi'])) {
        $lokasi = $_POST['lokasi'];
    }else{
        $lokasi = null;
    }

    if (isset($_POST['harga_satuan'])) {
        $harga = $_POST['harga_satuan'];
    }else{
        $harga = null;
    }

    if (isset($_POST['jumlah_stok'])) {
        $jumlah_stok = $_POST['jumlah_stok'];
    }else{
        $jumlah_stok = null;
    }

    $con = new mysqli();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($kode_barang == null || $nama_barang == null || $jenis_barang == null || $lokasi == null || $harga == null || $jumlah_stok == null) {
            $_SESSION['msg']="Harap Data Di Isi Semua";
            header("Location:index.php");
        }

        $con = getConnect();
        if ($con->connect_error) {
            $_SESSION['msg']="Gagal Menghubungkan".$con->connect_error;
            header("Location:index.php");
        }

        if (isset($_POST["baru"])) {
            try {
                $sql = "INSERT INTO stok_barang (kode,nama,jenis,lokasi,harga,jumlah) VALUES ('$kode_barang','$nama_barang','$jenis_barang','$lokasi','$harga','$jumlah_stok')";
                $data = $con->query($sql);
                if ($data) {
                    $_SESSION['msg']="Data Berhasil Dimasukkan";
                    header("Location:table.php");
                }
            } catch (Exception $e) {
                $_SESSION['msg'] = "Error: Id yang baru dah ada di database pak";
                header("Location:index.php");
            }
        } 
        else if(isset($_POST["update"])){
            try {
                $sql = "UPDATE stok_barang SET nama = '$nama_barang', jenis = '$jenis_barang', lokasi = '$lokasi' , harga = '$harga', jumlah = '$jumlah_stok' WHERE kode = '$kode_barang';";
                $data = $con->query($sql);
                if ($data) {
                    $_SESSION['msg'] = "Data Berhasil DIupdate";
                    header("Location:table.php");
                }
            } catch (Exception $th) {
                $_SESSION['msg'] = "Error: " . $sql . "<br>" . $conn->error;;
                header("Location:index.php");
            }
        }
        
        else if(isset($_POST["hapus"])){
            $sql = "DELETE from stok_barang where kode = '$kode_barang';";
            $data = $con->query($sql);
            if ($data) {
                $_SESSION['msg'] = "Data Berhasil Dihapus";
                header("Location:table.php");
            }else{
                $_SESSION['msg'] = "Error: " . $sql . "<br>" . $conn->error;;
                header("Location:index.php");
            }
        }else{
            $con = getConnect();
            if ($con->connect_error) {
                $_SESSION['msg']="Gagal Menghubungkan".$con->connect_error;
                mysqli_close($con);
                header("Location:index.php");
            }else{
                $cari = $_POST['cari_data'];
                $sql = "SELECT * FROM stok_barang WHERE kode = '$cari';";
                $data = $con->query($sql)-> fetch_assoc();
                if ($data) {
                    $_SESSION['msg']="Data Ditemukan";
                    $_SESSION['data']= $data;
                    mysqli_close($con);
                    header("Location:index.php");
                }else{
                    $_SESSION['msg'] = "Data Tidak Ditemukan";
                    mysqli_close($con);
                    header("Location:index.php");
                }
            }
        }
    }else{
        mysqli_close($con);
        header("Location:table.php");
    }

    function getConnect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inventaris";
        $con = new mysqli($servername,$username,$password,$dbname);
        return $con;
    }

?>