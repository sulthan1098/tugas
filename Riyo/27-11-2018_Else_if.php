<html>
<title>Else If</title>
<h1>Else IF</h1>

<?php



$Harga_Bakos = 10000;
$Uang_Kamu = 5000;
$Uang_Pacar = 15000;

if($Uang_Kamu > $Harga_Bakos){
    echo 'Bisa beli tapi pake uang pacar HAHAHA';
}else if($Uang_Pacar > $Harga_Bakos){
        echo 'Bisa beli tapi pake uang pacar HAHAHA';
}
else{
    echo 'Engga Cukup';
}

?>

</html>