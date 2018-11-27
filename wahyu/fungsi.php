<?php
    // fungsi
    // function panggil(){
    //     echo 'asslamualaikum';
    // }

    // function jarak(){
    //     echo '<br>';
    // }

    // function jawab(){
    //     echo 'waalaikumsalam';
    // }

    // panggil();
    // jarak();
    // jawab();

    // parameter
    // function salam($salam){
    //     $salam = "assalamualaikum ". $salam;
    //     echo $salam;
    // }

    // function jarak(){
    //     echo "<br>";
    // }

    // function jawab($jawab){
    //     $jawab = "waalaikumsalam ". $jawab;
    //     echo $jawab;
    // }

    // salam("kawan");
    // jarak();
    // jawab("bro");

    // return fungsi
    function menghitung($x, $y){
        $hasil = $x - $y;
        return $hasil;
    }

    $hasil = menghitung(8, 7) *2;
    echo "hasilnya adalah ". $hasil;
    echo "<br>";
    echo "pengurangan 9 - 5 adalah ". menghitung(9,5);


    // scope (menggunakan global untuk mengenalkan variabel)
    // $a = 4000;
    // $b = 30;

    // function menghitung(){
    //     // $c = $GLOBALS['a'] + $GLOBALS['b'];

    //     global $a, $b;
    //     $c = $a + $b;
    //     return $c;
    // }

    // echo menghitung();

    // anonymous function
    // $helo = function($text){
    //     echo $text;
    // };

    // $helo('haii teman-teman');

    // callback function
    // function panggil($callback){
    //     echo 'hai <br>';

    //     if ( is_callable($callback) ){
    //         call_user_func($callback, 'aassiiyaappp');
    //     }else{
    //         echo 'bukan boy';
    //     }
    // }

    // $manggil = function($text){
    //     echo $text;
    // };

    // panggil($manggil);



?>