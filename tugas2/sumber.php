<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Masukkan Jumlah Data</h2>

<form action="#" method="post" >

<input type="text" name="jumlah" placeholder="Masukkan Jumlah Data"/>

<!-- <input type=”submit” name=”tambah” value=”Tambah”> -->
<button type="submit" name="tambah">Tambah</button>

</form>
   
    <form action="tujuan.php" method="post">
    <?php if(isset($_POST['jumlah'])) :?>

    <table border="1">
    <tr>
    <th>Mata Kuliah</th>
    <th>Jumlah Sks</th>
    <th>Nilai</th>
    </tr>
     <input type="hidden" name="jumlah" value="<?php echo $_POST['jumlah'] ?>" /> 
    <?php 
        
    for($i=0; $i<$_POST['jumlah'] ; $i++): ?>
    <tr>

    <td><input type="text" name="mtkuliah[]" placeholder="masukkan mata kuliah"></td>
    <td><input type="text" name="sks[]" placeholder="masukkan jumlah sks"></td>
    <td><input type="text" name="nilai[]" placeholder="masukkan Nilai"></td>
    </tr>
    

    
    <?php endfor?>

    </table>
    <button type="submit" name="kirim"> Kirim</button>
<?php endif ?>
    
    </form>

</body>
</html>