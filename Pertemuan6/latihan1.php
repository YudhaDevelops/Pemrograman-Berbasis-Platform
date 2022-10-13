<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <?php 
    $suhu = [23,45,36,27,33,32,30,28,35,32];

    echo "<ul>";
        foreach($suhu as $s){
        echo "<li>$s</li>";
        }
        echo "</ul>";
        echo "<a href='./index.php'>Kembali</a>";
    ?>

</body>
</html>