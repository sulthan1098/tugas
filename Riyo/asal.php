<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>



<?php

// $bp=$_POST['textfield'];

// $bk=$_POST['textfield2'];

// //Menampilkan hasil dari perhitungan dan operatornya bisa Anda ganti

// $h= $bp + $bk ;


$Angka1 = $_POST['textfield'];
$Angka2 = $_POST['textfield2']; 
// $hasil = $_POST['Submit'];
// $hasil = $Angka1 + $Angka2;

if (isset($_POST['Submit'])){
  $Angka1 = $_POST['texfield'];
  $Angka2 = $_POST['textfield2'];

  echo $_POST['Submit'] = $Angka1 + $Angka2;
}
// ?>


// ?>








<form id="form1" name="form1" method="post" action="">
  <table width="352" border="1" align="center">
    <tr>
      <th colspan="3" scope="col">PROGRAM PENJUMLAHAN </th>
    </tr>
    <tr>
      <td width="126">Angka pertama </td>
      <td width="8">:</td>
      <td width="196"><label>
        <input type="text" name="textfield" />
      </label></td>
    </tr>
    <tr>
      <td>Angka kedua </td> 
      <td>:</td>
      <td><label>
      <input type="text" name="textfield2" />
      </label></td>
    </tr>
<tr>
<td width="126">Hasil</td>
<td width="8">:</td>
<td width="196"><label> <input type="text" name="hasil"></label></td>
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