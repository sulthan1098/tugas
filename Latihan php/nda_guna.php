<html>
<head>
<title>Contoh Program Aritmatika dengan PHP
</title>
</head>
<body>
<center>Program Sederhana Aritmatika</center>
<form action="aksi.php" method="post">
Nilai Pertama <input type="text" name="satu" Placeholder="Masukan Nilai Pertama"><br/>
Pilih Operator <select name="operator">
<option>Pilih Salah Satu !</option>
<option>Penjumlahan</option>
<option>Pengurangan</option>
<option>Perkalian</option>
<option>Pembagian</option>
</select>
Nilai Kedua <input type="text" name="dua" Placeholder="Masukan Nilai Kedua"><br/>
<input type="reset" Value="Batal">
<input type="submit" Value="Hitung">
</form>
</body>
</html>




<?php
$satu=$_POST['satu'];
$dua=$_POST['dua'];
$operator=$_POST['operator'];
$tambah=$satu+$dua;
$kurang=$satu-$dua;
$kali=$satu*$dua;
$bagi=$satu/$dua;
if (empty($satu or $dua))
else if ($operator=="Pilih Salah Satu !")
{
echo "Maaf Anda Tidak Memilih Operator..!";
}
else if ($operator=="Penjumlahan")
{
echo "Hasilnya Adalah $tambah";
}
else if ($operator=="Pengurangan")
{
echo "Hasilnya Adalah $kurang";
}
else if ($operator=="Pembagian")
{
echo "Hasilnya Adalah $bagi";
}
else if ($operator=="perkalian")
{
echo "Hasilnya Adalah $kali";
}
?>