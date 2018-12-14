<?php
$harga = $_POST['bayar'];
$diskon=0;

if(isset($_POST['masuk'])){
    echo "Total Belanjaan: <br>";

if(isset($_POST['buah1'])){
    echo "beli ".$_POST['buah1']."&nbsp;dan ";
    $buah1=124500;
}
if(isset($_POST['buah2'])){
    echo $_POST['buah2']." <br> ";
    $buah2=11000;
}
if(isset($_POST['buah3'])){
    echo $_POST['buah3']."<br>";
    $buah3=15000;
}
}

// function buah($buah1,$buah2,$buah3){
//     if($buah1 and $buah2){
//         global $buah1,$buah2,$buah3,$harga;
//         $hasil1=$buah1+$buah2;
//         $diskon=$hasil1*0.2;
//         $tharga1=$hasil1-$diskon;
//         $kembalian1=$harga-$tharga1;
//         echo "Diskon ".$diskon."<br>";
//         echo "Bayar ".$harga."<br>";
//         echo "sisa bayar ".$kembalian1;
//     }else if($buah1 and $buah3){
//         global $buah1,$buah2,$buah3,$harga;
//         $hasil2=$buah1+$buah3;
//         $diskon=$hasil2*0.1;
//         $tharga2=$hasil2-$diskon;
//         $kembalian2=$harga-$tharga2;
//         echo "Diskon ".$diskon."<br>";
//         echo "Bayar ".$harga."<br>";
//         echo "sisa bayar ".$kembalian2;
//     }else if($buah1 and $buah2 and $buah3){
//         global $buah1,$buah2,$buah3,$harga;
//         $hasil3=$buah1+$buah2+$buah3;
//         $diskon=$hasil3*0.05;
//         $tharga3=$hasil3-$diskon;
//         $kembalian3=$harga-$tharga3;
//         echo "Diskon ".$diskon."<br>";
//         echo "Bayar ".$harga."<br>";
//         echo "sisa bayar ".$kembalian3;
//     }else{
//         echo "bukan";
//     }
// }


// echo buah($buah1,$buah2,$buah3);


?>