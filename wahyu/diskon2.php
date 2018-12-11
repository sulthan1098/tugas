<?php

// $buah1 = $_POST['buah1'];
// $buah2 = $_POST['buah2'];
// $buah3 = $_POST['buah3'];
$harga = $_POST['bayar'];
$diskon=0;


if(isset($_POST['masuk'])){
    echo "Total Belanjaan: <br>";

if(isset($_POST['buah1'])){
    echo "beli ".$_POST['buah1']."&nbsp;dan ";
    $buah1=124500;
}
if(isset($_POST['buah2'])){
    echo $_POST['buah2']."<br>";
    $buah2=11000;
}
if(isset($_POST['buah3'])){
    echo $_POST['buah3']."<br>";
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
    echo "Bayar ".$harga."<br>";
    echo "Mendapatkan Diskon Sebesar ".$diskon."<br>";
    echo "hasilnya adalah ".$kembalian1;
}


echo buah1();

function buah2()
{
    global $buah1,$buah3,$harga;
    $hasil2=$bu
}


// if($buah1 and $buah2){
//     $hasil1=$buah1+$buah2;
//     $diskon=$hasil1*0.2;
//     $tharga1=$hasil1-$diskon;
//     $kembalian1=$harga-$tharga1;
//     echo "Diskon ".$diskon."<br>";
//     echo "Bayar ".$harga."<br>";
//     echo "sisa bayar ".$kembalian1;
// }
// else if($buah1 and $buah3){
//     $hasil2=$buah1+$buah3;
//     $diskon=$hasil2*0.1;
//     $tharga2=$hasil2-$diskon;
//     $kembalian2=$harga-$tharga2;
//     echo "Diskon ".$diskon."<br>";
//     echo "Bayar ".$harga."<br>";
//     echo $kembalian2;
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
// else{
//     echo "maaf";
// }



?>