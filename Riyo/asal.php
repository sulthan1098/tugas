<html>
</head>

<body>



<?php

// $bp=$_POST['textfield'];

// $bk=$_POST['textfield2'];

// //Menampilkan hasil dari perhitungan dan operatornya bisa Anda ganti

// $h= $bp + $bk ;


// $Angka1 = $_POST['textfield'];
// $Angka2 = $_POST['textfield2']; 
// // $hasil = $_POST['Submit'];
// $hasil = $Angka1 + $Angka2;

// if (isset($_POST['Submit'])){
//   $Angka1 = $_POST['texfield'];
//   $Angka2 = $_POST['textfield2'];

//   echo $_POST['Submit'] = $Angka1 + $Angka2;
// }
// ?>











<form id="form1" name="form1" method="post" action="hitung.php">
  <table width="352" border="1" align="center">
    <tr>
      <th colspan="3" scope="col">PROGRAM PENJUMLAHAN </th>
    </tr>
    <tr>
      <td width="126">Angka pertama </td>
      <td width="8">:</td>
      <td width="196"><label>
        <input type="text" name="" />
      </label></td>
    </tr>
    <tr>
      <td>Angka kedua </td> 
      <td>:</td>
      <td><label>
      <input type="text" name="dua" />
      </label></td>
    </tr>



    <tr>
      <td colspan="3" align="center"><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>