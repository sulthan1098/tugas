<?php
$data =array('sulthan','wahyu','riyo');
$data2=array('tkj','tkj','tkj');
$data3=array('11','11','11');
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>jurusan</th><th>kelas</th></tr>";

foreach($data  as $hasil)
foreach($data2 as $hasil2)
foreach($data3 as $hasil3)
{
    echo "<tr><td>$hasil</td><td>$hasil2</td></tr>"; 
}

?>