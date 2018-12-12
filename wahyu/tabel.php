<?php
$hewan=array('macan','kucing','singa','kambing');
sort($hewan);
$panjang = count($hewan);

$kota=array('depok','jakarta','bogor','bekasi');
sort($kota);
$panjang = count($kota);

?>

<table border=1>
<tr>
<th>nama hewan</th>
<th>nama kota</th>
</tr>

<?php for($i=0; $i < $panjang;  $i++){ ?>
<tr>    
    <td><?php echo $hewan[$i]; ?></td>
    <td><?php echo $kota[$i]; ?></td>
</tr>
<?php }?>

</table>

