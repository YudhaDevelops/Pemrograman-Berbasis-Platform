<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge1</title>
    <style>
    .label {
        margin-top: 100px;
    }
    </style>
</head>

<body>
    <table border="3" width="100%">
        <thead>
            <tr colspan="2">
                <th>Challenge 1</th>
            </tr>
        </thead>
    </table>
    <br><br>

    <form action="response.php" method="post">
        <label class="label" for="nim">NIM : </label>
        <input type="text" name="nim">
        <br>

        <label class="label" for="nama">NAMA : </label>
        <input type="text" name="nama">
        <br>

        <label class="label" for="status">Status Kelulusan : </label>
        <select name="status" id="status">
            <option value="" selected>--Pilih--</option>
            <option value="Memuaskan">Memuaskan</option>
            <option value="Baik">Baik</option>
            <option value="Tidak Baik">Tidak Baik</option>
        </select>

        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>