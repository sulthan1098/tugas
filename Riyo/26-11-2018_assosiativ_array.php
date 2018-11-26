<?php

$R = array( "Nama" => "Riyo" ,
            "Umur" => "17" ,
            "Status" => "Jomblo"
);

print_r($R);    


echo " <br> "; 
echo "Namanya adalah " . $R['Nama'];
echo " <br> ";
echo "Umurnya Dia " . $R['Umur'];
echo " <br> ";
echo "Statunya ya.. masih.." . $R['Status'];
echo " <br> ";
// Cara mengubah isi dari arraynya
// Hanya dengan mengganti Key nya

$R['Nama'] = "EX1OZ";

echo "Nama lagi " . $R['Nama'];
?>