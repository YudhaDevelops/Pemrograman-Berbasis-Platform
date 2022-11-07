<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platform_db";

// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";

// insert data 
// $sql = "INSERT INTO mahasiswa (nim, nama)
// VALUES ('205314025', 'Joko Susilo')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

echo "<br>";
// nampilkan data
echo "<br>";
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "NIM: " . $row["nim"]. " - NAMA: " . $row["nama"]. " " . "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <br><br><br>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
        </tr>
        <?php if($result->num_rows > 0) { ?>
        <?php foreach ($result as $value) { ?>
        <tr>
            <td><?= $value['nim']; ?></td>
            <td><?= $value['nama']; ?></td>
        </tr>
        <?php } ?>
        <?php } ?>
    </table>
</body>
</html>