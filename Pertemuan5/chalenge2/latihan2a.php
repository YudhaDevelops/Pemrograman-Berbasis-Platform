<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
    <style>
        .lebar{
            width:100%;
        }
    </style>
</head>

<body>
    <table border="2">
        <tr>
            <th>
                <h2>FX. Bima Yudha Pratama 205314020</h2>
            </th>
        </tr>
        <tr>
            <td>
                <table border ="0">
                    <form action="latihan2b.php" method="post">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <h1 class="lebar">FORM BIODATA</h1>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label for="nama"> Nama : </label>
                                </td>
                                <td>
                                    <input type="text" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="alamat">Alamat : </label>
                                </td>
                                <td>
                                    <input type="text" name="alamat">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="umur">Umur : </label>
                                </td>
                                <td>
                                    <input type="number" name="umur">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jenis_kelamin">Jenis Kelamin : </label>
                                </td>
                                <td>
                                    <input type="radio" name="jenis_kelamin" id="pria" value="Pria">
                                    <label for="pria">Pria</label>
                                    <br>
                                    <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                                    <label for="wanita">Wanita</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="hobi">Hobby : </label>
                                </td>
                                <td>
                                    <input type="checkbox" id="music" name="hobi[]" value="Music">
                                    <label for="music"> Music</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" id="programing" name="hobi[]" value="Programming">
                                    <label for="programing">Programing</label>
                                    <br>
                                    <input type="checkbox" id="game" name="hobi[]" value="Game">
                                    <label for="game">Game</label>
                                    <br>    
                                    <input type="checkbox" id="movie" name="hobi[]" value="Movies">
                                    <label for="movie">Movies</label>
                                </td>    
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" id="traveling" name="hobi[]" value="Travelling">
                                    <label for="traveling">Travelling</label>
                                    <br>
                                    <input type="checkbox" id="sport" name="hobi[]" value="Sport">
                                    <label for="sport">Sport</label>
                                    <br>
                                    <input type="checkbox" id="organisisasi" name="hobi[]" value="Organization">
                                    <label for="organisisasi">Organization</label>
                                    <br>
                                    <input type="checkbox" id="otomotive" name="hobi[]" value="Automotive">
                                    <label for="otomotive">Automotive</label>
                                </td>
                            </tr>
                            <tr>
                                <th colspan ="2">
                                    <input class="lebar" type="submit" value="submit">
                                </th>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>