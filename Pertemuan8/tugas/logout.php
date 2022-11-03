<?php 
    session_start();

    if (isset($_SESSION['user'])) {
        session_destroy();
        echo "Anda Sudah Berhasil Logout";
        echo "
            <a href='./index.php'>Kembali</a>
        ";
    }
    ?>
