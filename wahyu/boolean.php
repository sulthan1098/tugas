<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>belajar boolean</title>
</head>
<body>
    
<?php

    //tipe data boolean
    // $data  = true;
    // $data1 = false;

    //if dan else
    // $password = 'tkj';

    // if ($password == 'tkj2') {
    //     echo 'benar boy';
    // }else{
    //     echo 'kurang tamvan';
    // }

    
    // $uang       = 5000;
    // $bakso      = 10000;
    // $uang_temen = 20000;

    // menggunakan || ( kalau menggunakan || tidak perlu menggunakan elseif )
    // if( $uang > $bakso || $uang_temen > $bakso){
    //     echo "boleh beli bakso";
    // }else{
    //     echo "tidak bisa beli";
    // }

    // menggunakan &&
    // if( $uang > $bakso && $uang_temen > $bakso){
    //     echo "boleh beli bakso";
    // }else{
    //     echo "tidak bisa beli";
    // }

    // lebih dari 1 syarat menggunakan elseif
    // if( $uang > $bakso ){
    //     echo "Makasih bro";
    // }elseif ($uang_temen > $bakso) {
    //     echo "Makasih bro!";
    //     if($uang_temen >= $bakso * 2 ){
    //         echo " udah dibayar sama temenmu";
    //     }
    // }
    // else{
    //     echo "kurang bro";
    // }

    // switch case
    $minum   = "jus";

    switch ($minum) {
        case 'teh';
            echo 'ini teh';
            break;
        case 'kopi';
            echo 'ini kopi';
            break;
        case 'jus';
            echo 'ini jus';
            break;
        default;
            echo 'salah';

    }


?>
</body>
</html>