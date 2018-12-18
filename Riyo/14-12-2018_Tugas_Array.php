<?php
$DMotor = [
    ['Motor' => 'Yamaha','Nama Motor' => "YZF-R25",'CC Motor' => 247.99,'Harga' => "Rp 56.200.000", 'Warna' => "Biru"],
    ['Motor' => "Honda",'Nama Motor' => "CBR 250RR","CC Motor" => 249.50,"Harga" => " Rp 71,480,000","Warna" => "Merah"],
    ['Motor' => "Kawasaki",'Nama Motor' => "Ninja 250R","CC Motor" => 249.50,"Harga" => " Rp 74,600,000","Warna" => "Hitam"]
];

?>

<html>
<head><link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></head>
<body>
<form action="14-12-2018_SDK.php" name="Swis">
<table class="table table-striped table-dark">
<tr>
<th>Merk</th><th>Nama Motor</th><th>CC</th><th>Harga</th><th>Harga OTR</th>
</tr>
<?php
    foreach($DMotor as $key => $Motor):
?>
<tr><td><?php echo $Motor['Motor'] ?></td><td><?php echo $Motor['Nama Motor'] ?></td><td><?php echo $Motor['CC Motor'] ?></td><td><?php echo $Motor['Harga'] ?></td><td><?php echo $Motor['Warna'] ?></td><td><input type="radio" name="optradio" value>
</tr>   



<?php endforeach; ?>

</table>

<button  class="btn btn-primary" type="submit" >Kirim</div>
</form>
</body>
</html>