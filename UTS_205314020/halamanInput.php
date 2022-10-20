<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314020 Halaman Input</title>
</head>
<body>
    <table border="2">
        <tr>
            <td>
                <table border ="0">
                    <form id="form1" action="halamanJawab.php" method="post">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <h1 class="lebar">Pesan Makanan dan Minuman</h1>
									<h1 class="lebar">205314020 FX Bima Yudha Pratama</h1>
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
                            <!-- makanan -->
                            <tr>
                                <td>
                                    <label for="makanan">Makanan : </label>
                                </td>
                                <td>
                                    <input type="checkbox" id="nasi_goreng" name="makanan[]" value="Nasi Goreng">
                                    <label for="nasi_goreng"> Nasi Goreng</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" id="mie_goreng" name="makanan[]" value="Mie Goreng">
                                    <label for="mie_goreng">Mie Goreng</label>
                                    <br>
                                    <input type="checkbox" id="mie_godog" name="makanan[]" value="Mie Godog">
                                    <label for="mie_godog">Mie Godog</label>
                                    <br>
                                </td>    
                            </tr>
                            <!-- akhir -->
                            <tr>
                                <td>
                                    <label for="minuman">Minuman : </label>
                                </td>
                                <td>
                                    <input type="checkbox" id="es_teh" name="minuman[]" value="Es Teh Manis">
                                    <label for="es_teh"> Es Teh Manis</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" id="es_jeruk" name="minuman[]" value="Es Jeruk">
                                    <label for="es_jeruk">Es Jeruk</label>
                                    <br>
                                    <input type="checkbox" id="teh_panas" name="minuman[]" value="Teh Panas">
                                    <label for="teh_panas">Teh Panas</label>
                                    <br>
                                    <input type="checkbox" id="jeruk_panas" name="minuman[]" value="Jeruk Panas">
                                    <label for="jeruk_panas">Jeruk Panas</label>
                                    <br>
                                </td>    
                            </tr>
                            <tr>
                                <th colspan ="2">
                                    <input class="lebar" type="submit" id="submit" value="submit">
                                </th>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </td>
        </tr>
    </table>
    
    <!-- <script>
        var btn = document.getElementById("form1").submit();
        btn.addEventListener('submit',function(){
            var makanan = document.getElementByName('makanan[]');
            alert(makanan);
        });

        let button_submit = document.getElementById('submit');
        button_submit.addEventListener('click',function(){
            var makanan = document.getElementByName('makanan[]');
            alert(makanan);
        });
    </script> -->
</body>
</html>