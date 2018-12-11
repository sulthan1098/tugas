<?php

$buah1 = $_POST['buah1'];
$buah2 = $_POST['buah2'];
$buah3 = $_POST['buah3'];
$nama1 = $_POST['buah1'];
$nama2 = $_POST['buah2'];
$nama3 = $_POST['buah3'];
$bayar=$_POST['bayar'];
$diskon1 = 17100;
$diskon2 = 13950;


if($buah1 == "Duren (Rp.124.500)"){
    $buah1 = 124500;
}
else{
    $buah1 = 124500;
}

if($buah2 == "Semangka (Rp.11.000)"){
    $buah2 = 11000;
}
else{
    $buah2 = 11000;
}

if($buah3 == "Melon (Rp.15.000)"){
    $buah3 = 15000;
}
else {
    $buah3 = 15000;
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



echo "Beli $nama1 Dan $nama2    "
?>