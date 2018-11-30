<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <table width="352" border="1" align="center">
    <form action="" method="post" name="form1">
       
            <tr>
                <th colspan="3" scope="col">PROGRAM PENJUMLAHAN</th>
            </tr>
            <tr>
                <td width="126">Angka Pertama </td>
                <td width="196">
                 <label>
                    <input type="text" name="angka1">
                 </label>
                </td>
            </tr>
            <tr>
                <td width="126">Angka Kedua </td>
                <td width="196">
                 <label>
                    <input type="text" name="angka2">
                 </label>
                </td>
            </tr>
            <tr>
                <td width="126">Hasil</td>
                <td width="196">
                    <label>
                        <input type="text" name="hasil">
                    </label>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <label>
                        <input type="submit" name="Submit" value="Submit">
                    </label>
                </td>
            </tr>
        
    </form>
    </table>


    <?php
    $angka1 = $_POST[angka1];
    $angka2 = $_POST[angka2];
    $hasil= $angka1 + $angka2;
    echo  $hasil;
    ?>
</body>
</html>