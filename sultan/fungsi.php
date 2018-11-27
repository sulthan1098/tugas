<h1>fungsi pada php</h1>

<?php
//--------fungsi-----

// function nama()
// {
//     echo "aku sulthan, ";
//     echo "dia sulthan, ";
//     echo "mereka sulthan, ";
// }

// nama();

//-----parameter
// function teks( $text )
// {
//     $text = " makanan " . $text;
//     echo "---------------";
//     echo $text;
//     echo "---------------";
    
// }

// function jarak(){
//     echo "<br>";
// }

// teks("burger");
// jarak();
// teks("nasi padang");
// jarak();
// teks("pizza");
// jarak();

// //------ return fungsi -----
// function ngitung($x, $y){
//     $z = $x + $y;
//     return $z;
// }
 
// echo "hasil dari penjumlahan adalah", ngitung(2, 4) ;

//----------- scope ------------
// $a = 20;
// $b = 3;

// function menghitung(){
//     global $a, $b;

//     //$c = $GLOBALS['A'] + $GLOBALS['B'];
//     $c = $a + $b;
//     return $c;
// }

// echo menghitung();

//--------- anonymous function ----------

// $ngetik = function($text){
//     echo $text;
// };

// $ngetik( 'selamat datang bep!');

//----- callback function -------

function berteriak($callback){
    echo 'halloooo!!!! <br> ';
    $callback();
}


$panggil = function(){
    echo ' saya sulthan ';
};

berteriak( $panggil );


























?>