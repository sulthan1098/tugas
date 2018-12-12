<?php
$data = ['nama' => 'alip','matematika' => 70,'ipa' => 80, 'bahasa' => 90];

// echo "<table border=1>";
// echo "<tr><th>nama</th><th>pelajaran</th></tr>";

for($r=0; $r<count($data); $r++){
    foreach($data[$r] as $value => $key){
        echo $value.$key;
    }
}


?>