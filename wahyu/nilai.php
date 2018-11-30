<?php
   
    $nilai = $_POST['nilai'];


    switch($nilai){
        case 100;
        echo "Grade A+";
        break;
        case 80 >= 90;
        echo "Grade A";
        break;
        case 70 >= 80;
        echo "Grade B";
        break;
        case 60;
        echo "Grade C";
        break;
        case 10 <= 60;
        echo "Grade D";
        break;
        default;
        echo "masukan nilainya";
    }


?>