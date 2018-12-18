<?php

// $buah1 = $_POST['buah1'];
// $buah2 = $_POST['buah2'];
// $buah3 = $_POST['buah3'];

$harga = $_POST['bayar'];
$diskon1=0;
$diskon2=0;
$diskon3=0;


if(isset($_POST['masuk'])){
    echo "Total Belanjaan: <br>";

if(isset($_POST['buah1'])){
    echo "beli ".$_POST['buah1']." , ";
    $buah1=124500;
}
if(isset($_POST['buah2'])){
    echo $_POST['buah2']." <br> ";
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
    $diskon1=$hasil1*0.2;
    $tharga1=$hasil1-$diskon1;
    $kembalian1=$harga-$tharga1;
    echo "Bayar Rp ". number_format($harga,2,',','.')."<br>";
    echo "1 Mendapatkan Diskon Sebesar Rp ".number_format($diskon1,2,',','.')."<br>";
    echo "hasilnya adalah ".number_format($kembalian1,2,',','.');
}

// echo buah1();

function buah2()
{
    global $buah1,$buah3,$harga;
    $hasil2=$buah1+$buah3;
    $diskon2=$hasil2*0.1;
    $tharga2=$hasil2-$diskon2;
    $kembalian2=$harga-$tharga2;
    echo "Bayar Rp ". number_format($harga,2,',','.')."<br>";
    echo "2 Mendapatkan Diskon Sebesar Rp ".number_format($diskon2,2,',','.')."<br>";
    echo "hasilnya adalah ".number_format($kembalian2,2,',','.');
}

// echo buah2();


function buah3()
{
    global $buah1,$buah2,$buah3,$harga;
    $hasil3=$buah1+$buah2+$buah3;
    $diskon3=$hasil3*0.05;
    $tharga3=$hasil3-$diskon3;
    $kembalian3=$harga-$tharga3;
    echo "Bayar Rp ". number_format($harga,2,',','.')."<br>";
    echo "3 Mendapatkan Diskon Sebesar Rp ".number_format($diskon3,2,',','.')."<br>";
    echo "hasilnya adalah Rp ".number_format($kembalian3,2,',','.');
}

echo buah3();

// ===================================================================== //













// if($buah1 and $buah2){
//     global $buah1,$buah2,$buah3,$harga;
//     $hasil1=$buah1+$buah2;
//     $diskon=$hasil1*0.2;
//     $tharga1=$hasil1-$diskon;
//     $kembalian1=$harga-$tharga1;
//     echo "Diskon ".$diskon."<br>";
//     echo "Bayar ".$harga."<br>";
//     echo "sisa bayar ".$kembalian1;
// }
// else if($buah1 and $buah3){
//     global $buah2;
//     $hasil2=$buah1+$buah3;
//     $diskon=$hasil2*0.1;
//     $tharga2=$hasil2-$diskon;
//     $kembalian2=$harga-$tharga2;
//     echo "Diskon ".$diskon."<br>";
//     echo "Bayar ".$harga."<br>";
//     echo "sisa bayar ".$kembalian2;
// }
// else if($buah2 and $buah3){
//     $hasil3=$buah2+$buah3;
//     $kembalian3=$harga-$hasil3;
//     echo "Diskon ".$diskon."<br>";
//     echo "Bayar ".$harga."<br>";
//     echo $kembalian3;
// }
// else if($buah1 and $buah2 and $buah3){
//     $hasil4=$buah1+$buah2+$buah3;
//     $kembalian4=$harga-$hasil4;
//     echo "Diskon ".$diskon."<br>";
//     echo "Bayar ".$harga."<br>";
//     echo $kembalian4;
// }




?>