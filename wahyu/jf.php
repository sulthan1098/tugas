<?php
$data = ['nama' => 'alip','matematika' => 70,'ipa' => 80, 'bahasa' => 90];

?>

<html>
<head><link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></head>
<body>
<table class="table table-bordered">
<?php
    foreach($data as $nama => $mapel):
?>
<tr>
    <td><?php echo $nama ?></td>
    <td><?php echo $mapel ?></td>
</tr>

<?php endforeach; ?>

</table>
</body>
</html>