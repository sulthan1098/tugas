<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form action="hitung.php" method="POST">
        <table  width="352" border="1" align="center">
          <tr>
              <th colspan="3" scope="col">Toko Buku Riyo</th>
          </tr> 
          <tr>
              <td width="126">Barang Pertama</td>
              <td width="196">
              <label>
              <select name="jajang">
            <option>Pilih</option>
            <option>Buku (Rp 20.000)</option>
            <option>Pulpen (Rp 2.500)</option>
            <option>Penggaris (Rp 3.000)</option>
            <option>Penghapus(Rp 500)</option>
            </select>
            
                  

              </label>
            </td>
          </tr>

          <tr>
              <td width="126">Barang Kedua</td>
              <td width="196">
                    <label>
            <select name="bambank">
            <option>Pilih</option>
            <option>Buku (Rp 20.000)</option>
            <option>Pulpen (Rp 2.500)</option>
            <option>Penggaris (Rp 3.000)</option>
            <option>Penghapus(Rp 500)</option>
            </select>
            
                    </label>
                  </td>
          </tr>

        
          <td>
				
				<input type="submit" name="Submit" value="Submit">
                </td>
        </table>
    </form>


   


</body>
</html>