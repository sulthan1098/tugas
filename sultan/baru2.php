<?php
<<<<<<< HEAD
$data = [['nama' => "alip",'kelas' => "10",
"matematika" => 70,
"ipa" => 80,
"bahasa" => 90],
['nama' => "usman",
'kelas' => "10",
"matematika" => 70,
"ipa" => 80,
"bahasa" => 90],
];

echo "<table border=1>";
echo "<tr><th>nama</th><th>kelas</th><th>pelajaran</th><th>nilai</th></tr>";



foreach($data as $value['nama']){ 
echo "<tr><td>$value</td>";
?>








    
=======
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
>>>>>>> 5070794f86cdef9fa478393ff18a05ecb804277b
