<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   
    <form action="tujuan.php" method="post">
    

    <table border="1">
    <tr>
    <th>Mata Kuliah</th>
    <th>Jumlah Sks</th>
    <th>Nilai</th>
    </tr>
     <input type="hidden" name="jumlah" value="<?php echo $_POST['jumlah'] ?>" /> 
    <?php 
        
    for($i=0; $i<5 ; $i++): ?>
    <tr>

    <td><input type="text" name="mtkuliah[]" placeholder="masukkan mata kuliah"></td>
    <td><input type="text" name="sks[]" placeholder="masukkan jumlah sks"></td>
    <td><input type="text" name="nilai[]" placeholder="masukkan Nilai"></td>
    </tr>
    

    
    <?php endfor?>

    </table>
    <button type="submit" name="kirim"> Kirim</button>

    
    </form>

</body>
</html>