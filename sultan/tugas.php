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
<div class="main-wrapper">
        <div class="main">
            <form action="diskon2.php" method="POST">
                <h1>Toko Buah</h1>
                <table>
                    <tr>
                        <td>Duren (Rp.124.500)</td>
                        <td><input type="checkbox" name="buah1" value="0"></td>
                    </tr>
                    <tr>
                        <td>Semangka (Rp.11.000)</td>
                        <td><input type="checkbox" name="buah2" value="1"></td>
                    </tr>
                    <tr>
                        <td>Melon (Rp.15.000)</td>
                        <td><input type="checkbox" name="buah3" value="2"></td>
                    </tr>
                    
                    <tr>
                        <td>Bayar</td>
                        <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                        <button type="submit">Submit</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>