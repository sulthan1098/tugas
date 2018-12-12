<?php
$hewan=array('macan','kucing','singa','kambing');
$kota=array('depok','jakarta','bogor','bekasi');
echo "tabel saya";
?>
<html>
<body>
        <table border='1'>
        <tr>
            <td><?php echo "Nama Hewan"; ?></td>
            <td><?php echo "Nama Kota"; ?></td>
        </tr>
        <tr>
            <td><?php foreach($hewan as $hews => $n){echo "$n <br>";} ?></td>
            <td><?php foreach($kota as $kots => $n){echo "$n <br>";} ?></td>
        </tr>
        </table>
</body>
</html>