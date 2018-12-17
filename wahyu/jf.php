<?php
$data = [
    ['makanan' => 'nasi goreng','harga' => 12000,'pesan' => 2],
    ['makanan' => "ayam bakar",'harga' => 15000,"pesan" => 5],
    ['makanan' => 'nasi uduk','harga' => 10000,'pesan' => 1]
];

?>

<html>
<head><link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></head>
<body>
<form action="tabel.php" method="get">
<table class="table table-bordered">
<tr>
<th>Makanan</th>
<th>Harga</th>
<th>Pesan</th>
<th>PILIH</th>
</tr>
<?php
    foreach($data as $key => $value):
?>
<tr>
    <td><?php echo $value['makanan'] ?></td>
    <td><?php echo $value['harga'] ?></td>
    <td><?php echo $value['pesan'] ?></td>
    <td><input type="radio" name="bu" value="nasi goreng"></td>
</tr>

<?php endforeach; ?>

</table>
<button type="submit" class="btn btn-block btn-success" name="ba" >Kirim</button>
</form>
</body>
</html>