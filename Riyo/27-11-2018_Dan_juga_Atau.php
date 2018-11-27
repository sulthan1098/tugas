<html>
<title>Dan juga Atau</title>
<h1>Dan juga Atau</h1>

<?php

// Perintahnya adalah && atau || 

// Kalu || Bisa kita sambungkan menjadi perintah seperti dibawah 


$Harga_Bakos = 10000;
$Uang_Kamu = 5000;
$Uang_Pacar = 20000;

if( $Uang_Kamu > $Harga_Bakos || $Uang_Pacar > $Harga_Bakos){
    
    echo 'boleh beli keyboard';
}else{
    echo 'ngga bisa!';
}


// Kalau && 2'' Syaratnya harus memenuhi 

$Harga_Bakos = 10000;
$Uang_Kamu = 5000;
$Uang_Pacar = 20000;

if( $Uang_Kamu > $Harga_Bakos && $Uang_Pacar > $Harga_Bakos){
    
    echo 'boleh beli keyboard <br>';
}else{
    echo ' ngga bisa! <br>';
}




?>

</html>