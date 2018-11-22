<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar String</title>
</head>
<body>


    <?php
    // data string
    $nama = "hello bro-bro";
    $nama2   = "Welcome To My Website";

    echo $nama. " " . "\$nama2";
    echo "<br>";



    // integer dan float
    $angka  = 20;
    $angka2 = 10.23;

    echo $angka + $angka2;
    echo "<br>";

    // hitungan 
    $test   = 10;
    $test2  = 20;
    $test3  = 30;

    $test++;
    echo $test;
    echo "<br>";



    // angka random
    echo "Nomor togel hari ini adalah ". rand(1, 100);
    echo "<br>";

    // pembulatan angka
    $bulat  = 20.5;
    echo "pembulatan angka " .round($bulat);
    echo "<br>";

    // menentukan nilai min dan max
    echo "angka terbesar " .max($test, $test2, $test3). "<br>";
    echo "angka terkecil " .min($test, $test2, $test3). "<br>";

    // menghitung jumlah huruf
    $huruf = "wahyu firmansyah";
    echo strlen($huruf). "<br>";

    // mengganti huruf
    $huruf1 = "haii watashi";
    echo str_replace("watashi", "saya", $huruf1). "<br>";

    // repeat 
    $huruf2 = "bro ";
    echo str_repeat($huruf2, 5); 

    ?>
    
</body>
</html>