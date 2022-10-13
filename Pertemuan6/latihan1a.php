<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1a</title>
</head>
<?php 
$suhu = [23,45,36,27,33,32,30,28,35,32];
?>

<body>
    <?php 
        echo "<h1>Latihan 1a</h1>";
        echo "<table border='1'>";
        $i = 1;
        foreach($suhu as $s){
            echo "<ol>";
            echo "<tr><td>Hari Ke- $i </td><td> $s</td></tr>";
            echo "</ol>";
            $i++;
        }
        echo "</table> <br><br>";
        echo "<a href='./index.php'>Kembali</a>";
    ?>
</body>
</html>