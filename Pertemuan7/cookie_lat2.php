<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Cookie</title>
</head>
<body>
    <?php 
        if (isset($_COOKIE['cookie1'])) {
            echo "
            <h1>Cookie ditemukan. Nilai Coockie adalah ".$_COOKIE['cookie1']."</h1>";
        }else{
            echo "
            <h1>Maaf, Cookie tidak ditemukan</h1>
            ";
        }
    ?>
</body>
</html>