<?php
$data =array(
       array('sulthan','wahyu','riyo'),
       array('tkj','tkj','tkj'));
?>

<table border='1'>"
<tr>
    <th>Nama</th>
    <th>jurusan</th>
</tr>

<?php foreach($data  as $hasil => $n){
    for($i=0; $i < count($data); $i++){?>

        <tr>
            <td><?php echo $data[$i]; ?></td>
            <td><?php echo $data[$i]; ?></td>
        </tr>

    
<?php }} ?>
</table>