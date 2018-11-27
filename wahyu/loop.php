<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>belajar loop</title>
</head>
<body>
    <?php

    //pengulangan
    // for($i=0; $i<5; $i++ )
    // {
    //     echo "$i belajar loop <br>";
    // }

    //mengeluarkan hasil array
    $makan = ['kue ', 'roti', ' nasi', ' lontong'];

    // mengeluarkan array dan bisa mengurangi valuenya 
    // for($i=0; $i<count($makan); $i++)
    // {
    //     echo $makan[$i];
    // }


    //mengeluarkan semua array
    // foreach ($makan as $m) {
    //     echo "<br>";
    //     echo $m;
    // }

    // foreach assosiatif array
    // $data = ["nama"=>"wahyu",
    //       "kelas"=>11,
    //       "jurusan"=>"tkj"];

    // foreach ($data as $key => $value) {
    //     echo $value. "<br>";
    // }

    //while(syarat) melihat syarat terlebih dahulu baru eksekusi
    $i = 0;

    while ($i  < count($makan) ) {
        echo $makan[$i]. "<br>";
        $i++;   
    }

    //do = eksekusi sekali baru melihat syarat
    // do {
    //     echo $makan[$i]. "<br>";
    //     $i++;
    // } while ($i  < count($makan));


q

    ?>
</body>
</html>