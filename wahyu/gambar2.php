<?php


//========= Contoh Tunggal =========
$ba=json_decode($_POST['ba']);

// echo "<img src='../image/'>".$ba->img;
// // echo $ba->img;
// echo '<br>';
// echo $ba->nama;
//========= Contoh Tunggal =========







//========= Contoh Jamak =========
// $ba=json_decode($_POST['ba']);

// foreach($ba as $item){
//     echo '<br>';
//     echo $item->nama;
//     echo '<br>';
//     echo $item->img;
// }
//========= Contoh Jamak =========
?>

<img src="../image/<?php echo $ba->img; ?>">
<br>
<?php echo $ba->nama;?>


