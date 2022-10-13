<?php 

$daftarHobi = [
    "Sepakbola",'Nonton Bioskop','Main Game','Shopping'
];

echo "<h1>Daftar Hobi</h1> ";
echo "<form action='latihan3a.php' method='POST'> ";
foreach($daftarHobi as $key => $dh){
    echo "<input type='checkbox' name='hobi[]' id='hobi$key' value='$dh'><label for='hobi$key'>$dh</label>";
    echo "<br>";
}
echo "<input type='submit'> ";
echo "</form>";

?>
<br><br>
<?php 
echo "<a href='./index.php'>Kembali</a>";
?>