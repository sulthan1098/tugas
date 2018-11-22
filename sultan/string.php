<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>string</h1>
    <?php
 //typedata string 

 $nama ="belajar koding";

echo $nama  . " bersama " . " kamu ";

echo " <br> ";

//string method 
   $text = "sulthan maulidzi";
   echo str_replace("sulthan", "hallo", $text) ;
   echo str_repeat("sulthan", 10);
   echo str_word_count($text); 
   echo " <br> ";

?>
</body>

</html>
