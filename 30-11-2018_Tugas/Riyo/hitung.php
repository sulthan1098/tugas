<?php

$Barang1 = $_POST ['jajang'];
$Barang2 = $_POST ['bambank'];
$Nama1   = $_POST ['jajang'];
$Nama2   = $_POST ['bambank'];


if($Barang1 == "Buku (Rp 20.000)"){
    $Barang1 = 20000;
}
else if($Barang1 == "Pulpen (Rp 2.500)"){
    $Barang1 = 2500;
}
else if($Barang1 == "Penggaris (Rp 3.000)"){
    $Barang1 = 3000;
}
else{
    $Barang1 = 500;
}

if($Barang2 == "Buku (Rp 20.000)"){
    $Barang2 = 20000;
}
else if($Barang2 == "Pulpen (Rp 2.500)"){
    $Barang2 = 2500;
}
else if($Barang2 == "Penggaris (Rp 3.000)"){
    $Barang2 = 3000;
}
else{
    $Barang2 = 500;
}

<<<<<<< HEAD

$Hasil   = $Barang1 + $Barang2 ;

echo "Barang yang saya beli adalah $Nama1 & $Nama2";
echo "<br>";
echo "Harga yang harus saya bayar adalah $Hasil";
=======
$Hasil   = $Barang1 + $Barang2 ;

echo $Hasil;

// if($Nama1 == "Buku (Rp 20.000)"){
    
// }
// else if($Nama1 == "Pulpen (Rp 2.500)"){
    
// }
// else if($Nama1 == "Penggaris (Rp 3.000)"){
   
// }
// else{
   
// }

// echo "Barang yang anda beli adalah : $Nama1";
>>>>>>> 31dd1af230f8948d7fa3dbe6f49d5397f8a15942

?>