<?php

$bilangan1=$_POST['buah1'];
$bilangan2=$_POST['buah2'];
// $bilangan3=$_POST['buah3'];
$bayar=$_POST['bayar'];

$bayar=$jumlah1-$diskon;
$jumlah1=$bilangan1+$bilangan2;
// $jumlah2=$bilangan1+$bilangan3;

if($jumlah1 == "Duren (Rp.124.500)" and "Semangka (Rp.11.000)"{
    $diskon=(($jumlah1*20)/100);
    $bayar= $bilangan1 - $diskon;
    echo $bayar;
}else{
    $jumlah1 = 10000;
}

?>