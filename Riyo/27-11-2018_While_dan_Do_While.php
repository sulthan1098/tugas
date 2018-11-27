<?php
//While(Syarat)


$bunjank = ['Hitam' , 'Merah' , 'Biru', "Hijau" , 'Grey'];
$yolo = 0;

// while($yolo < count($bunjank) ){
//         echo $bunjank[$yolo]. "<br>";
//         $yolo++;
// }

do
{
    echo $bunjank[$yolo] . "<br>";
    $yolo++;
}while($yolo < count($bunjank));



?>