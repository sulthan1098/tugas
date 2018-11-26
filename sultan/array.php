<?php
// perkenalan array
    $kotak = array('anjing', 'kurakura', 'koala');
    
    print_r($kotak);
    echo $kotak[2];
    
//    array_unique _reverse, shuffle, count, sourt
    shuffle($kotak);
    print_r($kotak);
    echo " <br> ";

    // -----------associative array--------------
     $data = array( "nama" => "sulthan" , 
                    "umur" => 16  , 
                    "sekolah" => "smk nasional" );
 
     $data2 = array( "ibu" => "bunda" , 
                     "ayah" => "papah"   );


     echo "perkenalkan nama saya" . $data['nama'];
     echo " <br> ";

    //  ------------metode associative array------------
    //  array_values array_keys array_merge 
   print_r( array_values($data) );
    echo " <br> ";
    print_r( array_keys($data) );
    echo " <br> ";
    print_r( array_merge($data, $data2) );

    // ------Multi Dimensi Array-----

    $adata = array(
                    array("manusia", "25", "makan"),
                    array("alien", "1015", "belanja"),
                    array("monster", "90", "males")
   );
                        

                    echo $adata[1] [2];
    //---------pengulangan--------
    // for(variableawal(mulai); batas(syarat); perubhan)

    for($i=0; $i<10; $i++){
        echo "nama saya sulthan <br>";
    }
    echo " <br> ";

    $hewan = ['kucing', 'ayam', 'domba', 'kambing'];

    for($i=0; $i < count($hewan); $i++){
        echo $hewan [$i];
    }

?>