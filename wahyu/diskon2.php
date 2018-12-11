<?php

// $buah1 = $_POST['buah1'];
// $buah2 = $_POST['buah2'];
// $buah3 = $_POST['buah3'];
$harga = $_POST['bayar'];
$diskon=0;


if(isset($_POST['masuk'])){
    echo "Total Belanjaan: <br>";

if(isset($_POST['buah1'])){
    echo "beli ".$_POST['buah1']." & ";
    $buah1=124500;
}
if(isset($_POST['buah2'])){
    echo $_POST['buah2']. " & ";
    $buah2=11000;
}
if(isset($_POST['buah3'])){
    echo  $_POST['buah3'] ."<br>";
    $buah3=15000; 
}
}

$nodikson = "Maaf ini tidak dapat diskon :)";

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



echo


function buah2()
{
 global $buah1,$buah3,$harga;
 $hasil2=$buah1+$buah3;
 $diskon2=$hasil2*0.1;
 $tharga2=$hasil2-$diskon2;
 $kembalian2=$harga-$tharga2;
 echo "Bayar  $harga <br>";
 echo "Mendapatkan Diskon Sebesar $diskon2 <br>";
 echo "Hasilnya adalah $kembalian2";
}

function buah3(){
    global $buah1,$buah2,$buah3,$harga;
    $hasil3=$buah1+$buah2+$buah3;
    $diskon3=$hasil3*0.05;
    $tharga3=$hasil3-$diskon3;
    $kembalian3=$harga-$tharga3;    
    echo "Bayar  $harga <br>";~
    echo "Mendapatkan Diskon Sebesar $diskon3 <br>";
    echo "Hasilnya adalah $kembalian3";

}                                                                                                                                                                                                                                                                                                                                                                                                                                                    

echo buah1();

?>