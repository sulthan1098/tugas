<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Callback Function</title>
    <h1>Callback Function</h1>
</head>
<body>
    
<?php

function Seig($callback){
    echo 'Hail <br>';
if( is_callable($callback)){
    call_user_func($callback, 'Nama lu bejo');
}else{
    echo ' Dia Bukan Orang';
    <button>Submit</button>
}
}

$bejo = function($text){
    echo $text;
};

Seig( 213 );

?>

</body>
</html>