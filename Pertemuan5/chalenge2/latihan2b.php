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
    <style>
    .kembali {
        width: 100%;
        text-decoration: none;
        color: black;
    }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>
                    <h1>
                        FORM BIODATA-REVIEW
                    </h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <table border="1">
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>
                                <?= $nama; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <?= $alamat; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Umur
                            </td>
                            <td>
                                <?= $umur; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jenis Kelamin
                            </td>
                            <td>
                                <?= $jenis_kelamin; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Hobi
                            </td>
                            <td>
                                <?= $all_hobi; ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <a href="latihan2a.php" type="button" class="kembali">Kembali</a>
                            </th>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>