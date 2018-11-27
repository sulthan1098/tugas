<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return pada Fungsi</title>
    <h1>Return pada Fungsi</h1>
</head>
<body>
    
<!-- Parameter adalah variabel yang ingin kita buat saat kita memanggil fungsi agar kita bisa mengoper nilai pada fungsi itu -->

<?php


function ex( $ex, $angka ){
    $ex = "Char" . $ex . " " .$angka;
    echo "---------";
    echo "$ex";
    echo "---------";
    
    }
    
    function jarak(){
    echo '<br>';
    }
    
    ex("  Ex", 9);
    jarak();
    ex(" Ex1oz", 9);
    jarak();
    ex(" Ex1", 9);
    jarak();

function hitung($x, $y){
    $z = $x + $y;
    return $z;
}
$hasil = hitung(2, 5) * 10;
echo "Hasil dari Hitungannya" . $hasil;



?>


</body>
</html>