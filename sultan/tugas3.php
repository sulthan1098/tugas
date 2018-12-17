<?php
$data = [
    ['nama' => 'sulthan','kelas' => "11",'Hoby' => 'makan','NISN' => 17181401, 'jurusan' => 'TKJ', 'sekolah' => 'smk nasional'],
    ['nama' => "wahyu",'kelas' => "11","Hoby" => 'badminton',"NISN" => 17181402,"jurusan" => 'TKJ', 'sekolah' => 'smk nasional'],
    ['nama' => "riyo",'kelas' => "11","Hoby" => 'nyikat wc',"NISN" => 17181403,"jurusan" => 'TKJ', 'sekolah' => 'smk nasional'],
    ['nama' => "arif",'kelas' => "11","Hoby" => 'maen game',"NISN" => 17181404,"jurusan" => 'TKJ', 'sekolah' => 'smk nasional']
];

?>

<html>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<form action="tukas3.php" method="post">

<table class="table table-bordered">
<tr>
<th>NAMA</th>
<th>KELAS</th>
<th>HOBY</th>
<th>NISN</th>
<th>JURUSAN</th>
<th>SEKOLAH</th>
<th>PILIH</th>

</tr>
<?php
    foreach($data as $key => $value):
?>

<?php
if( isset($_POST['radio'])){
    echo $_POST['$data'];
}
?>

<tr>                
    <td><?php echo $value['nama'] ?></td>
    <td><?php echo $value['kelas'] ?></td>
    <td><?php echo $value['Hoby'] ?></td>
    <td><?php echo $value['NISN'] ?></td>
    <td><?php echo $value['jurusan'] ?></td>
    <td><?php echo $value['sekolah'] ?></td>
    <td><input type="radio" name="optradio"></td>
</tr>

<?php endforeach; ?>

</table>
<button type="submit" class="btn btn-info" name="submit">Info</button>
</form>
</body>
</html>