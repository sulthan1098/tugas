<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scope</title>
    <h1>Scope</h1>
</head>
<body>

<?php

$a = 2;
$b = 3;

function hitung (){
global $a, $b; //digunakan untuk mencari variabel diluar function
$c = $a + $b;
return $c;
}

echo "Hasilnya " . hitung();

?>

</body>
</html>