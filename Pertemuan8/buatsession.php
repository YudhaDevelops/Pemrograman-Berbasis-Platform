<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Session</title>
</head>
<body>
    <?php 
        $_SESSION['pengguna']= "Joko Sembung";
        echo "
        <h1>Selamat, Variabel session sudah terbentuk</h1>
        ";
        ?>    
</body>
</html>