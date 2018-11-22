<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar array</title>
</head>
<body>

<?php
    //array
    //$kota = array('depok', 'jakarta', 'bekasi', 'bogor');

    //untuk memunculkan semua item
    //print_r($kota);

    //untuk beberapa item
    //echo $kota[0];

    //untuk membalik arah
    //print_r( array_reverse($kota) );

    //metode shuffel
    //shuffle($kota);
    //print_r($kota);

    //mengetahui jumlah array nya
    //echo count($kota);

    //mengurutkan nilai sesuai abjad
    //sort($kota);
    //print_r($kota);

    //associative array
    // $data = array(  "nama"  => "wahyu" , 
    //                 "umur"  => 17 ,
    //                 "jurasan" => "TKJ"
    //             );

    // $data2 = array( "kelas" => "11TKJ2" ,
    //                 "wali kelas" => "pak riyan"
    //         );
    //memunculkannya
    //print_r($data);

    //untuk memunculkan beberapa dan merubah isinya
    // $data['nama'] = "wahyu firmansyah";
    // echo "nama saya adalah " . $data['nama'];

    //metode values
    // print_r(array_values ($data));

    //metode key
    //print_r(array_keys($data));

    //metode merge untuk menggabungkan beberapa array
    // print_r(array_merge($data, $data2));

    //multi dimensi array 
    $data = array(
        array("jeruk", "mangga", "apel"),
        array("kopi", "jus", "es kepal"),
        array("tomat", "wortel", "bawang")
    );

    $data[1][3] = "es kepal milo";
    echo $data[1][3];

?>
    
</body>
</html>