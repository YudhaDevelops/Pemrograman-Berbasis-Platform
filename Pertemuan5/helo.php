<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helo World </title>
</head>
<body>
    <?php
        echo("Saya belajar php");

        $namaDepan = "FX. Bima";
        $namaBelakang = " Yudha Pratama";
        $umur = 17;
        
        echo ("<br> $namaDepan  $namaBelakang  Berumur  $umur"); 
    ?>

    <?php
        $counter = 1;
        echo "<ul>";
        while ($counter <= 5 ) {
            echo "<li> loop ke $counter";
            $counter++;
        } 
        echo "</ul>"
    ?>


</body>
</html>