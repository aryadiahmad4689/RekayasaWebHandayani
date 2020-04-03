<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $tahunMasuk = $_GET['tahunMasuk'];
    $tahunSekarang = date("Y");
    $masaPengabdian = $tahunSekarang - $tahunMasuk;

    if($masaPengabdian <= 5){
        $gajiPokok = 2000000;
    }else if($masaPengabdian > 5 && $masaPengabdian <10){
        $gajiPokok =2500000;
    }else if($masaPengabdian >10){
        $gajiPokok=3000000; 

    }

?>

    <form action="hasil.php" action="get">
    <p>Nip</p>
    <input type="text" name="nip" value="<?php echo $_GET['nip']?>">
    <p>Nama</p>
    <input type="text" name="nama" value="<?php echo $_GET['nama']?>">
    <p>Gaji Pokok</p>
    <input type="text" name="gajiPokok" value="<?php echo $gajiPokok ?>">
    <p>Presentase Kehadiran (%)</p>
    <input type="text" name="kehadiran">
    <p>Presentase Kinerja (%)</p>
    <input type="text" name="kinerja">

   

    <button type="submit" name="kirim">Proses</button>
    
    
    </form>
</body>
</html>