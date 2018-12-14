<html>
<head><link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></head>


<body>
    
<?php
// $nama=array('iman','sulthan','riyo','wahyu','anita','putri','ageng');
// sort($nama);
// $panjang = count($nama);

// $kelas=array('11','10','11','12','11','11','12');
// sort($kelas);
// $panjang = count($kelas);



//  print_r($data);

// foreach($data as $value){
//     echo $value['nama'];
// }

// $jurusan=array('tkj','tkr','tkj','tsm','tkj','tkj','tsm');
// sort($jurusan);
// $panjang = count($jurusan);

// $hoby=array('lari','badminton','futsal','futsal','bersepeda','nyayi','bermain musik');
// sort($hoby);
// $panjang = count($hoby);

?>

<table class="table table-bordered">
<tr>
<th>nama Taruna</th>
<th>tingkatan kelas</th>
<th>pelajaran</th>
<th>nilai</th>


</tr>
<?php
$data = [['nama' => "alip",
'kelas' => "10",
"matematika" => 70,
"ipa" => 80,
"bahasa" => 90],
['nama' => "usman",
'kelas' => "10",
"matematika" => 70,
"ipa" => 80,
"bahasa" => 90],
];

print_r ($data);
?>




<?php 

foreach($data as $value){
    for($i=0; $value  $i++){ ?>
        <tr>    
            <td><?php echo $nama[$i]; ?></td>
            <td><?php echo $kelas[$i]; ?></td>
            <td><?php echo $jurusan[$i]; ?></td>
            <td><?php echo $hoby[$i]; ?></td>
        
        </tr>
        <?php }?>
}

for($i=0; $i < $panjang;  $i++){ ?>
<!-- <tr>    
    <td><?php echo $nama[$i]; ?></td>
    <td><?php echo $kelas[$i]; ?></td>
    <td><?php echo $jurusan[$i]; ?></td>
    <td><?php echo $hoby[$i]; ?></td>

</tr>
<?php }?> -->
</table>

</body>
</html>