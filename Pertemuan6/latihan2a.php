<?php 
$nimNama = [
    '101' => "Budi",
    '102' => "Sari",
    '103' => "Rudi",
    '104' => "Jimmy",
    '105' => "Rachel",  
];

$terpilih = $_GET["nim"];

echo "
    <h1>Detil Mahasiswa</h1>
    <table border='1'>
        <tr>
            <td>
                NIM
            </td>
            <td>
                Nama
            </td>
        </tr>
        <tr>
            <td>
                $terpilih
            </td>
            <td>
                $nimNama[$terpilih]
            </td>
        </tr>
        <tr>
            <td  colspan='2'>
                <a href='./latihan2.php'>Kembali</a>
            </td>
        </tr>
    </table>"
?>
