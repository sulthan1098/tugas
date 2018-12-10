<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hasil</title>
<style type="text/css">
<!--
.style1 {
 font-size: xx-large;
 font-weight: bold;
 
}
.style2 {font-size: xx-large; font-weight: bold; color: #990099; }
-->
</style>
</head>
 <body style='background: green';>
 <h1 align="center" style="color:white;"><marquee>
   <span class="style4">SELAMAT DATANG DI PROGRAM SEDERHANA KAMI</span>

 
 </marquee>  </h1>
 <HR SIZE = "15" NOSHADE>
<body>
<div align="center" class="style2">
  <p class="style2">RENTAL MOBIL MAJU BERSAMA </p>
</div>
<form method="post" action="quis_form_awal.php">

<table width="627" height="349" border="1" align="center" bgcolor="#00CC99">
  <tr>
    <td width="737" height="43"><div align="center"><span class="style1">HASIL</span></div></td>
  </tr>
  <tr>
    <td><?php
 $namamobil=$_POST['namamobil'];
 
 if($namamobil =='AVP')
 {
 $harga=250000;
 }
 else if($namamobil =='Panther')
 {
 $harga=3000000;
 }
 else
 {
 $harga=350000;
 }
 
 
 
echo "KODE MOBIL     : ".$_POST['nama'];
echo "<br />";
echo "<br />";
echo "JENIS MOBIL      : ".$_POST['namamobil'];
echo "<br />";
echo "<br />";
echo "HARGA SEWA    : $harga ";
echo "<br />";
echo "<br />";
echo "LAMA SEWA    : ".$_POST['nama2'];
echo "<br />";
echo "<br />";
echo "JUMLAH MOBIL  : ".$_POST['nama3'];
echo "<br />";
echo "<br />";



$lamasewa = $_POST['nama2'];
$jumlah = $_POST['nama3'];

$totharga = $lamasewa * $jumlah * $harga;

   if($totharga > 2000000){
  
   echo "Total Harga : Rp. $totharga <br>";
      echo "Selamat Anda mendapatkan diskon 5% <br>";
   $diskon = $totharga * (5/100);
   $tharga = $totharga - $diskon;
    echo "Total Diskon Anda : Rp. $diskon <br>";
   echo "Total Yang Anda Bayar : Rp. $tharga <br>";
   }
  
  else
  
   {
      echo "Total Harga : Rp. $totharga <br>";
      echo " Maaf Anda Tidak Mendapatkan Diskon <br>";
   echo "Total Yang Anda Bayar : Rp. $totharga<br>";
   }
  
?>
    <p>&nbsp;</p>
    <p align="center">
       <input name="submit" type="submit" value="Kembali" />
    </p></td>
  </tr>
</table>
</body>


</html>