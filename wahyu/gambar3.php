<?php
$data=[['nama' => 'gambar1','img' => 'download.jpg'],
       ['nama' => 'gambar2','img' => 'download1.jpg'],
       ['nama' => 'gambar3','img' => 'download3.jpg'],
       ['nama' => 'gambar4','img' => 'download4.jpg']];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" >
    <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gambar.css">
    <link rel="stylesheet" href="apa.css">
</head>
<body>
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="#" class="menu-item">Home</a></li>
                    <li><a href="#" class="menu-item">About</a></li>
                    <li><a href="#" class="menu-item">Education</a></li>
                    <li><a href="#" class="menu-item">Contact</a></li>
                    <li><a href="#" class="menu-item">GitHub</a></li>
                    <li><a href="#" class="menu-item">Support</a></li>
                    <li><a href="#" class="menu-item">Login</a></li>
                    <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                </ul>
                    <div class="search-form">
                        <form>
                            <input type="text" name="" placeholder="Cari Disini">
                        </form>
                    </div>
                    <a class="close"><i class="fa fa-times"></i></a>
            </div>
        </nav>


<form action="gambar2.php" method="post" enctype="multipart/form-data">
    <section class="bg-light pt-4">
        <div class="container">    
            <div class="row">  

<?php
foreach($data as $key => $value):
?>
                    <div class="col-md-3 col-6">
                        <img src="../image/<?php echo $value['img']; ?>">
                        <figcaption class="figure-caption py-2"><?php echo $value['nama']; ?></figcaption>
                        <button class="btn btn-primary" name="ba" value=<?php echo json_encode($value);?>>Masuk</button>        
                        
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </section>
</form>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#search').click(function(){
              $('.menu-item').addClass('hide-item')
              $('.search-form').addClass('active')
              $('.close').addClass('active')
              $('#search').hide()
          })
          $('.close').click(function(){
              $('.menu-item').removeClass('hide-item')
              $('.search-form').removeClass('active')
              $('.close').removeClass('active')
              $('#search').show()
          })
      })
    </script>
</body>
</html>
