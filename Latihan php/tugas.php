<?php

if(empty($_POST['nilai1'])){
    $A1 = 0;
}
else{
    $A1 = $_POST['nilai1'];
}

if(empty($_POST['nilai2'])){
    $A2 = 0;
}
else{
    $A2 = $_POST['nilai2'];
}

$Tambah= $A1 + $A2;
$Kurang= $A1 - $A2;
$Pilih=$_POST['pilih'];


if(empty($A1 or $A2))
{
    echo "Isi Kolomnya dulu bambank!";
}
else if ($Pilih=="Tentukan")
{       
    echo "Maaf Silakhan Pilih Arimatikanya";
}
else if ($Pilih=="Penjumlahan")
{
    echo "Hasil dari Penjumlahannya adalah . $Tambah";
}
else if ($Pilih=="Pengurangan")
{
    echo "Hasil dari Pengurangannya adalah . $Kurang";
}


?>

