<?php

$nilai = $_POST['nilai'];
$nilai2 = $_POST['submit'];

if(($nilai  > 90)){
    echo "grade A+";
}else if(($nilai  >= 80)){
    echo "grade A";
}else if(($nilai >= 70)){
    echo "grade B";
}else if(($nilai >= 60)){
    echo "grade C";
}else if(($nilai < 60)){
    echo "grade D";
}






   




?>