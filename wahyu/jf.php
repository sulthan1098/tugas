<?php
$data = [
    ['nama' => 'alip','kelas' => "10",'matematika' => 70,'ipa' => 80, 'bahasa' => 90],
    ['nama' => "usman",'kelas' => "10","matematika" => 70,"ipa" => 80,"bahasa" => 90]
];

?>

<html>
<head><link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></head>
<body>
<table class="table table-bordered">
<tr>
<th>nama</th>
<th>kelas</th>
<th>MTK</th>
<th>IPA</th>
<th>BAHASA</th>
</tr>
<?php
    foreach($data as $key => $value):
?>
<tr>
    <td><?php echo $value['nama'] ?></td>
    <td><?php echo $value['kelas'] ?></td>
    <td><?php echo $value['matematika'] ?></td>
    <td><?php echo $value['ipa'] ?></td>
    <td><?php echo $value['bahasa'] ?></td>
</tr>

<?php endforeach; ?>

</table>
</body>
</html>