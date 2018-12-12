<?php
$data = array('sulthan','wahyu','riyo');
$data2= array('tkj','tkj','tkj');
sort($data);
sort($data2);
$panjang=count($data);
$panjang=count($data2);
?>

<table border=1>
<tr>
    <th>Nama</th>
    <th>jurusan</th>
</tr>

<?php for($i=0; $i<$panjang; $i++){ ?>

<tr>
    <td><?php echo $data[$i]; ?></td>
    <td><?php echo $data2[$i]; ?></td>
</tr>
<?php }?>

</table>