<?php
   
    $nilai = $_POST['nilai'];


    switch($nilai){
        case $nilai > 90 && $nilai <= 100;
        echo "Grade A+";
        break;
        case $nilai >= 80 && $nilai <= 90 ;
        echo "Grade A";
        break;
        case $nilai >= 70 && $nilai < 80;
        echo "Grade B";
        break;
        case $nilai >= 60;
        echo "Grade C";
        break;
        case $nilai < 60;
        echo "Grade D";
        break;
        default;
        echo "masukan nilainya";
        break;
    }
 

?>