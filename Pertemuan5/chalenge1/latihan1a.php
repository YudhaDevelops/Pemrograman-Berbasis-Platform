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

    .lebar {
        width: 100%;
    }
    </style>
</head>

<body>
    <table border="3" width="100%">
        <thead>
            <tr colspan="2">
                <th>FX. Bima Yudha Pratama 205314020</th>
            </tr>
        </thead>
    </table>
    <br><br>

    <table border="1">
        <tr>
            <td>
                <table>
                    <form action="latihan1b.php" method="post">
                        <thead>
                            <tr>
                                <th colspan="2">Challenge 1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="label" for="nim">NIM  </label>
                                </td>
                                <td>
                                    <input type="text" name="nim">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label" for="nama">NAMA  </label>
                                </td>
                                <td>
                                    <input type="text" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label" for="status">Status Kelulusan  </label>
                                </td>
                                <td>
                                    <select name="status" id="status" class="lebar">
                                        <option value="" selected>--Pilih--</option>
                                        <option value="Memuaskan">Memuaskan</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Tidak Baik">Tidak Baik</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th colspan=2>
                                    <input type="submit" class="lebar" value="Submit Data">
                                </th>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </td>
        </tr>
    </table>
    <br><br>

</body>

</html>