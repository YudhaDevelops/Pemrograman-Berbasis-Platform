<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
</head>

<body>
    <h1>FORM BIODATA</h1>

    <form action="response.php" method="post">
        <label for="nama"> Nama : </label>
        <input type="text" name="nama">

        <br>
        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat">

        <br>
        <label for="umur">Umur : </label>
        <input type="number" name="umur">

        <br>
        <label for="jenis_kelamin">Jenis Kelamin : </label>

        <input type="radio" name="jenis_kelamin" id="pria" value="Pria">
        <label for="pria">Pria</label>

        <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
        <label for="wanita">Wanita</label>

        <br>
        <label for="hobi">Hobby : </label>
        
        <br>
        <input type="checkbox" id="music" name="hobi[]" value="Music">
        <label for="music"> Music</label>
        
        <input type="checkbox" id="programing" name="hobi[]" value="Programming">
        <label for="programing">Programing</label>
        
        <input type="checkbox" id="game" name="hobi[]" value="Game">
        <label for="game">Game</label>

        <input type="checkbox" id="movie" name="hobi[]" value="Movies">
        <label for="movie">Movies</label>

        <br>
        <input type="checkbox" id="traveling" name="hobi[]" value="Travelling">
        <label for="traveling">Travelling</label>

        <input type="checkbox" id="sport" name="hobi[]" value="Sport">
        <label for="sport">Sport</label>

        <input type="checkbox" id="organisisasi" name="hobi[]" value="Organization">
        <label for="organisisasi">Organization</label>

        <input type="checkbox" id="otomotive" name="hobi[]" value="Automotive">
        <label for="otomotive">Automotive</label>

        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>