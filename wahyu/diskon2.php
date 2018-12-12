<?php

// $buah1 = $_POST['buah1'];
// $buah2 = $_POST['buah2'];
// $buah3 = $_POST['buah3'];
$harga = $_POST['bayar'];
$diskon=0;


if(isset($_POST['masuk'])){
    echo "Total Belanjaan: <br>";

if(isset($_POST['buah1'])){
    echo "beli ".$_POST['buah1']." , ";
    $buah1=124500;
}
if(isset($_POST['buah2'])){
    echo $_POST['buah2']." ";
    $buah2=11000;
}
if(isset($_POST['buah3'])){
    echo  $_POST['buah3'] ."<br>";
    $buah3=15000; 
}
}

function buah1()
{
    global $buah1,$buah2,$harga;
    $hasil1=$buah1+$buah2;
    $diskon=$hasil1*0.2;
    $tharga1=$hasil1-$diskon;
    $kembalian1=$harga-$tharga1;
    echo "<br>Bayar Rp ".number_format($harga,2,',','.')."<br>";
    echo "Mendapatkan Diskon Sebesar Rp ".number_format($diskon,2,',','.')."<br>";
    echo "hasilnya adalah ".number_format($kembalian1,2,',','.');
}

function buah2()
{
 global $buah1,$buah3,$harga;
 $hasil2=$buah1+$buah3;
 $diskon=$hasil2*0.1;
 $tharga2=$hasil2-$diskon;
 $kembalian2=$harga-$tharga2;
 echo "Bayar Rp ".number_format($harga,2,',','.')."<br>";
 echo "Mendapatkan Diskon Sebesar Rp ".number_format($diskon,2,',','.')."<br>";
 echo "Hasilnya adalah Rp ".number_format($kembalian2,2,',','.');
}

function buah3(){
    global $buah1,$buah2,$buah3,$harga;
    $hasil3=$buah1+$buah2+$buah3;
    $diskon=$hasil3*0.05;
    $tharga3=$hasil3-$diskon;
    $kembalian3=$harga-$tharga3;    
    echo "Bayar Rp ".number_format($harga,2,',','.')."<br>";
    echo "Mendapatkan Diskon Sebesar Rp ".number_format($diskon,2,',','.')."<br>";
    echo "Hasilnya adalah Rp ".number_format($kembalian3,2,',','.');

}                                                                                                                                                                                                                                                                                                                                                                                                                                                    

echo buah1();

?>