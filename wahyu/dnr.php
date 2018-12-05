<?php

$buah1 = $_POST['buah1'];
$buah2 = $_POST['buah2'];
// $buah3 = $_POST['buah3'];
$diskonan = 27100;
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


if($Hjumlah == "135000"){
    $Hjumlah = $Hbuah1;
}
else{
    $Hjumlah = $Hbuah;
}


$tambah = $buah1 + $buah2 ;

$Hjumlah = $tambah - $diskonan;

echo "Pilihannya . $Hbuah1";

?>