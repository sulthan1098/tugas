<?php

// Ada banyak operator logika di php 
// == < Mengeksekusi
// === < Mengecek Tipe datanya
// > < Lebih Besar
// < < Lebih Kecil
// >= < Apakah sama
// <= < Apakah Beda
// != < Tidak Sama

$pass = '12322';
$pass2 = 1234;        //bisa menggunakan data juga loh passwordnya !
if( $pass > '80-90' ){    //selain harus angka
    echo ' Lebih Besar !! ';
}else{
    echo ' Salah,ga bisa Tidurr...';
}


?>