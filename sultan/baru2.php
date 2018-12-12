<?php
$data =array('sulthan','wahyu','riyo');
$data2=array('tkj','tkj','tkj');

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>jurusan</th></tr>";

foreach($data  as $hasil)
foreach($data2 as $hasil2)
{
    echo "<tr><td>$hasil</td><td>$hasil2</td></tr>"; 
}

?>