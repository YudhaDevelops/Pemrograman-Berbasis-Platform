<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 a</title>
    <?php 
        $hobi = $_POST['hobi'];
    ?>
</head>

<body>

    <h1>
        Daftar Hobi Yang Kupilih
    </h1>
    <?php 
    echo "<ol>";
    foreach($hobi as $h){
        echo "<li> $h </li> <br>";
    }
    echo "</ol>";

    echo "<a href='./latihan3.php'>Kembali</a>";
    ?>

</body>

</html>