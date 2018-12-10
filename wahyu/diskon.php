<html>
    <head>
    <title>
    Sistem Perhitungan Diskon Oleh Keri Rahayu
    </title>
    <style>
    #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
    body{padding:0;margin:0;font-family:arial;font-size:12px;}
    #main-wrapper{border:3px double #c3d9ff;padding:5px;width:550px;margin:20px auto 0;}
    #main{text-align:left;padding:5px;background:#e8eefa;}
    table{font-size:12px;width:450px;}
    #efrih{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
    h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
    #efri{font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
    </style>
    </head>
    <body>
    <div id="main-wrapper">
    <div id="main">
    <form method="POST" action="">
    <h1>Sistem Menghitung Diskon</h1>
    <table>
    <tr>
    <td>Masukan Nama Pelanggan</td>
    <td><input type="text" name="bil1" /></td>
    <tr>
    <tr><br>
    <td>Masukan Jumlah Uang yang dibayar</td>
    <td><input type="text" name="bil2" /></td>
    </tr>
    <tr>
    <td>
    <label> <br> <br>
    <input type="submit" name="Submit" value="Hitung" id="efrih">
    </label>
    <label>
    <input type="reset" name="reset" value="Batal" id="efrih">
    </label>
    </td>
    </tr>
    </table>
    </form>
    <div id="hasil">
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <?php
    //Oleh KERI RAHAYU http://www.esticahsetiaku.blogspot.com/
    $bilangan1=$_POST['bil1'];
    $bilangan2=$_POST['bil2'];

    if ($bilangan2 >= 10000000) {
    $diskon=(($bilangan2*10)/100);
    $bayar=($bilangan2-$diskon);
    echo "Yang harus di bayar oleh $bilangan1 dengan Diskon 10% yaitu <blink><u>Rp. $bayar,-</u></blink>";}

    elseif ($bilangan2 >0 & $bilangan2 < 10000000) {
    $diskon=(($bilangan2*8)/100);
    $bayar=($bilangan2-$diskon);
    echo "Yang harus di bayar oleh $bilangan1 dengan Diskon 8% yaitu <blink><u>Rp. $bayar,-</u></blink>";}

    elseif ($bilangan2 = 0) {}


    ?>
    </div>
    </div>
    <div id="keri">
    Copyright © 2013 <a href="http://www.esticahsetiaku.blogspot.com/"
    target="new">keri rahayu</a>. Hak Cipta dilindungi Undang-Undang
    <?php echo date("  d-m-Y  H:i:s "); ?>
    </div>
    </div>
    </body>
    </html>