<?php 

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$umur = $_POST["umur"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$hobi = $_POST["hobi"];
$all_hobi = "";
if ($hobi > 1) {
    foreach ($hobi as $value) {
        $all_hobi .= $value. ", ";
    }
}

// var_dump($nama, $alamat, $umur, $jenis_kelamin, $hobi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
</head>

<body>

    <table border="2">
        <thead>
            <tr>
                <th>
                    FORM BIODATA-REVIEW
                </th>
            </tr>
        </thead>
        <tr>
            <td>
                Nama : <?= $nama; ?></h4>
            </td>
        </tr>
        <tr>
            <td>
                Alamat : <?= $alamat; ?>
            </td>
        </tr>
        <tr>
            <td>
                Umur : <?= $umur; ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin : <?= $jenis_kelamin; ?>
            </td>
        </tr>
        <tr>
            <td>
                Hobi : <?= $all_hobi; ?>
            </td>
        </tr>
    </table>
</body>

</html>