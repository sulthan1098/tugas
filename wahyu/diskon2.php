<?php

<<<<<<< HEAD
$buah1 = $_POST['buah1'];
$buah2 = $_POST['buah2'];
$buah3 = $_POST['buah3'];
$nama1 = $_POST['buah1'];
$nama2 = $_POST['buah2'];
$nama3 = $_POST['buah3'];
$bayar=$_POST['bayar'];
$diskon1 = 17100;
$diskon2 = 13950;

=======
// $buah1 = $_POST['buah1'];
// $buah2 = $_POST['buah2'];
// $buah3 = $_POST['buah3'];
$harga = $_POST['bayar'];
$diskon=0;
>>>>>>> 31dd1af230f8948d7fa3dbe6f49d5397f8a15942


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

if($buah1 and $buah2 == "Duren (Rp.124.500)"  "Semangka (Rp.11.000)" ){
    $buah1 + $buah2 - $diskon
}
else if($buah1 and $buah3 == "Duren (Rp.124.500)" and "Melon (Rp.15.000)" ){
    $buah1 + $buah3 - $diskon2
}
else{
    $buah1 + $buah2
}


if($nama1 == "Duren (Rp.124.500)"){
    echo "Duren";
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



echo "Beli $nama1 Dan $nama2    "
?>