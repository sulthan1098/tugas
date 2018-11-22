<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>loop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>loop</h1>
<?php
    $hewan = ['kucing', 'ayam', 'domba', 'kambing'];

//--------foreach---------
 foreach($hewan as $m){
     echo "----------------";
     echo $m;
     echo "----------------- <br> ";
 }

 $data = ['nama' => 'sulthan',
          'umur' => '16 tahun',
          'sifat' => 'ga busa diem'];

          foreach($data as $key => $value){
             echo $key . "<br>";
          }

    //-----------WHILE & DO WHILE--------
    while(syarat)
    
    $i = 0;

     while( $i < count($hewan) ){
         echo $hewan[$i]. "<br>";
         $i++;
     }        
?>


</body>





</html>