<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
<?php

if ( isset($_POST['submit']) ){
echo $_POST['nama'];
}
?>    

<form action="profile.php" method="post">
<input type="text" name="nama">
<input type="password" name="password">
<input type="submit" name="submit" >
</form>


</body>
</html>













