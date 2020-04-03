<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <h4>Hitung Luas Lingkaran</h4>
    Masukkan Panjang Jari Jari
    <input type="text" name="r" id="" value="<?php echo@$_POST['r'];?>">
    <button type="submit" name="hitung">Hitung</button>  
    </form>

    <?php
        function getLuasLingkaran($r){
            $luas = pi() * pow($r,2);
            echo "Luas Lingkaran = ".number_format($luas,2,",",".");
        }

        if(isset($_POST["hitung"])){
            $r = $_POST["r"];
            getLuasLingkaran($r);
        }
    ?>
</body>
</html>