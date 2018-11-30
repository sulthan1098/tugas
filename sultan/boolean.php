<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>boolean</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>boolean</h1>
    <?php
    // //------- tipe data boolean -------
    $hasil = true;
    $hasil2 = false;

    //----------- if dan else -----------
    //----operator logika---
    //-------------else if 
    //== === > >= < <= !=
    // $password = 'sulthan';

    // if( $password == 'sulthan'){
    //     echo 'selamat anda berhasil masuk';
    // }else{
    //     echo 'gagal! kamu salah memasukan password';

    // }

        $uang_programer = 1000;
        $keyboard       = 2000;
        $uang_desingner = 4000;
    
        // // &&  atau ||

        // if( $uang_programer > $keyboard || 
        //    $uang_desingner > $keyboard){
        //        echo 'boleh beli keyboard';
        //    }else{
        //        echo 'tidak bisa beli keyboard';
        //    }


        if( $uang_programer > $keyboard){
            echo 'dibeli';
        }else if( $uang_desingner > $keyboard){
            echo 'dibeli oleh desingner ';
            //----if
            if($uang_desingner >= $keyboard * 2){
                echo 'dibeli dua kali oleh desingner!';
            }

        // }
        // else{
        //     echo 'ga dibeli';
        // }

            
        //--------switch case------

//         $makanan = "burger";

//         switch ($makanan) {
//             case 'burger':
//              echo 'ini burger';
//             break;
//             case 'nasi warteg':
//              echo 'ini nasi warteg';
//             break;
//             case 'sop kambing':
//              echo 'ini sop kambing';
//             break;

//             default:
//              echo 'tidak ada yang benar';
            
// }
        








    ?>
</body>
</html>