<?php

$Barang1 = $_POST ['jajang'];
$Barang2 = $_POST ['bambank'];

if($Barang1 == "Buku (Rp 20.000)"){
    $Barang1 = 20000;
}
else 
{
    $Barang1 = 2500;
}

if($Barang2 == "Penggaris (Rp 3.000)"){
    $Barang2 = 3000;
}
else
{
    $Barang2 = 500;
}

$Jumlah = $Barang1 + $Barang2;


Echo "Harga yang harus dibayar adalah . $Jumlah";

?>