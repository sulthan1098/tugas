<html>
<title>True or False</title>
<h1>True or False</h1>

<?php



$Harga_Bakos = 10000;
$Uang_Kamu = 5000;
$Uang_Pacar = 20000;

$total = true;
$total2 = false;

// Jika data di beri false maka akan langsung di loncatin ke next kemungkinan

if($total2){
    echo 'Bisa beli tapi pake uang pacar HAHAHA';
}else if($total2){
        echo 'Bisa beli tapi pake uang pacar HAHAHA <br>';
    
        if($total2){
            echo 'Boleh Nambah!';
        }
}
else{
    echo 'Engga Cukup';
}

?>

</html>